<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2011                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined("_ECRIRE_INC_VERSION")) return;

// http://doc.spip.org/@action_editer_site_dist
function action_editer_site_dist($arg=null) {

	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}

	if (!$id_syndic = intval($arg)){
		$id_syndic = insert_syndic(_request('id_parent'));
		if ($logo = _request('logo')
		  AND $format_logo = _request('format_logo')) {
			include_spip('inc/distant');
			$logo = _DIR_RACINE . copie_locale($logo);
			@rename($logo,_DIR_IMG . 'siteon'.$id_syndic.'.'.$format_logo);
		}
	}

	if (!$id_syndic)
		return array(0,'');

	syndic_set($id_syndic);

	if (_request('redirect')) {
		$redirect = parametre_url(urldecode(_request('redirect')),'id_syndic', $id_syndic, '&');
		include_spip('inc/headers');
		redirige_par_entete($redirect);
	}
	else 
		return array($id_syndic,'');
}


// http://doc.spip.org/@insert_syndic
function insert_syndic($id_rubrique) {

	include_spip('inc/rubriques');

	// Si id_rubrique vaut 0 ou n'est pas definie, creer le site
	// dans la premiere rubrique racine
	if (!$id_rubrique = intval($id_rubrique)) {
		$id_rubrique = sql_getfetsel("id_rubrique", "spip_rubriques", "id_parent=0",'', '0+titre,titre', "1");
	}

	// Le secteur a la creation : c'est le secteur de la rubrique

	$id_secteur = sql_getfetsel("id_secteur", "spip_rubriques", "id_rubrique=".intval($id_rubrique));

	$champs = array(
		'id_rubrique' => $id_rubrique,
		'id_secteur' => $id_secteur,
		'statut' => 'prop',
		'date' => date('Y-m-d H:i:s'));
	
	// Envoyer aux plugins
	$champs = pipeline('pre_insertion',
		array(
			'args' => array(
				'table' => 'spip_syndic',
			),
			'data' => $champs
		)
	);

	$id_syndic = sql_insertq("spip_syndic", $champs);
	pipeline('post_insertion',
		array(
			'args' => array(
				'table' => 'spip_syndic',
				'id_objet' => $id_syndic
			),
			'data' => $champs
		)
	);

	return $id_syndic;
}

/**
 * Modifier un site
 *
 * $c est un contenu (par defaut on prend le contenu via _request())
 *
 * @param int $id_syndic
 * @param array|bool $set
 * @return string
 */
function syndic_set($id_syndic, $set=false) {
	$resyndiquer = false;

	include_spip('inc/rubriques');
	include_spip('inc/modifier');
	$c = collecter_requests(
		// white list
		array(
		 'nom_site', 'url_site', 'descriptif', 'url_syndic', 'syndication',
		 'moderation','miroir','oubli','resume'
		),
		// black list
		array('statut', 'id_parent', 'date'),
		// donnees eventuellement fournies
		$set
	);

	// resyndiquer si un element de syndication modifie
	if ($t = sql_fetsel('url_syndic,syndication,resume', 'spip_syndic', "id_syndic=".intval($id_syndic))){
		foreach($t as $k=>$v)
			if (isset($c[$k]) AND $v!=$c[$k])
				$resyndiquer = true;
	}

	// Si le site est publie, invalider les caches et demander sa reindexation
	$t = sql_getfetsel("statut", "spip_syndic", "id_syndic=".intval($id_syndic));
	if ($t == 'publie') {
		$invalideur = "id='site/$id_syndic'";
		$indexation = true;
	}

	modifier_contenu('syndic', $id_syndic,
		array(
			'nonvide' => array('nom_site' => _T('info_sans_titre')),
			'invalideur' => $invalideur,
			'indexation' => $indexation
		),
		$c);


	if ($resyndiquer AND sql_getfetsel('syndication','spip_syndic',"id_syndic=".intval($id_syndic))!=='non') {
		$syndiquer_site = charger_fonction('syndiquer_site','action');
		$syndiquer_site($id_syndic);
	}


	// Modification de statut, changement de rubrique ?
	$c = collecter_requests(array('date', 'statut', 'id_parent'),array(),$set);
	$err = instituer_syndic($id_syndic, $c);

	return $err;
}

// http://doc.spip.org/@revisions_sites
function revisions_sites($id_syndic, $set=false){
	return syndic_set($id_syndic,$set);
}

/**
 * Instituer un site : on se repose sur la fonction generique
 * @param int $id_syndic
 * @param array $c
 * @param bool $calcul_rub
 * @return mixed|string
 */
function instituer_syndic($id_syndic, $c, $calcul_rub=true){
	include_spip('action/editer_objet');
	return instituer_objet('site', $id_syndic, $c, $calcul_rub);
}


?>