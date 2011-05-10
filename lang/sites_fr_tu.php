<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://www.spip.net/trad-lang/
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'articles_dispo' => 'En attente', # NEW
	'articles_meme_auteur' => 'Tous les articles de cet auteur', # NEW
	'articles_off' => 'Bloqués', # NEW
	'articles_publie' => 'Publiés', # NEW
	'articles_refuse' => 'Supprimés', # NEW
	'articles_tous' => 'Tous', # NEW
	'aucun_article_syndic' => 'Aucun article syndiqué', # NEW
	'avis_echec_syndication_01' => 'La syndication a échoué : le backend indiqué est indéchiffrable ou ne propose aucun article.',
	'avis_echec_syndication_02' => 'La syndication a échoué : impossible d\'accéder au backend de ce site.',
	'avis_site_introuvable' => 'Site introuvable',
	'avis_site_syndique_probleme' => 'Attention : la syndication de ce site a rencontré un problème ; le système est donc temporairement interrompu pour l\'instant. Vérifie l\'adresse du fichier de syndication de ce site (<b>@url_syndic@</b>), et tente une nouvelle récupération des informations.',
	'avis_sites_probleme_syndication' => 'Ces sites ont rencontré un problème de syndication',
	'avis_sites_syndiques_probleme' => 'Ces sites syndiqués ont posé un problème',

	// B
	'bouton_radio_modere_posteriori' => 'modération à posteriori',
	'bouton_radio_modere_priori' => 'modération à priori',
	'bouton_radio_non_syndication' => 'Pas de syndication',
	'bouton_radio_syndication' => 'Syndication :',

	// C
	'confirmer_purger_syndication' => 'Êtes-vous certain de vouloir supprimer tous les articles syndiqués de ce site ?', # NEW

	// E
	'entree_adresse_fichier_syndication' => 'Adresse du fichier de syndication :',
	'entree_adresse_site' => '<b>Adresse du site</b> [Obligatoire]',
	'entree_description_site' => 'Description du site',

	// F
	'form_prop_nom_site' => 'Nom du site',

	// I
	'icone_article_syndic' => 'Article syndiqué', # NEW
	'icone_articles_syndic' => 'Articles syndiqués', # NEW
	'icone_controler_syndication' => 'Publication des articles syndiqués', # NEW
	'icone_modifier_site' => 'Modifier ce site',
	'icone_referencer_nouveau_site' => 'Référencer un nouveau site',
	'icone_site_reference' => 'Sites référencés', # NEW
	'icone_supprimer_article' => 'Supprimer cet article', # NEW
	'icone_supprimer_articles' => 'Supprimer ces articles', # NEW
	'icone_valider_article' => 'Valider cet article', # NEW
	'icone_valider_articles' => 'Valider ces articles', # NEW
	'icone_voir_sites_references' => 'Voir les sites référencés',
	'info_a_valider' => '[à valider]',
	'info_bloquer' => 'bloquer',
	'info_bloquer_lien' => 'bloquer ce lien',
	'info_derniere_syndication' => 'La dernière syndication de ce site a été effectuée le',
	'info_liens_syndiques_1' => 'liens syndiqués',
	'info_liens_syndiques_2' => 'sont en attente de validation.',
	'info_nom_site_2' => '<b>Nom du site</b> [Obligatoire]',
	'info_panne_site_syndique' => 'Site syndiqué en panne',
	'info_probleme_grave' => 'problème de',
	'info_question_proposer_site' => 'Qui peut proposer des sites référencés ?',
	'info_retablir_lien' => 'rétablir ce lien',
	'info_site_attente' => 'Site Web en attente de validation',
	'info_site_propose' => 'Site proposé le :',
	'info_site_reference' => 'Site référencé en ligne',
	'info_site_refuse' => 'Site Web refusé',
	'info_site_syndique' => 'Ce site est syndiqué...',
	'info_site_valider' => 'Sites à valider',
	'info_sites_referencer' => 'Référencer un site',
	'info_sites_refuses' => 'Les sites refusés',
	'info_statut_site_1' => 'Ce site est :',
	'info_statut_site_2' => 'Publié',
	'info_statut_site_3' => 'Proposé',
	'info_statut_site_4' => 'A la poubelle',
	'info_syndication' => 'syndication :',
	'info_syndication_articles' => 'article(s)',
	'item_bloquer_liens_syndiques' => 'Bloquer les liens syndiqués pour validation',
	'item_gerer_annuaire_site_web' => 'Gérer un annuaire de sites Web',
	'item_non_bloquer_liens_syndiques' => 'Ne pas bloquer les liens issus de la syndication',
	'item_non_gerer_annuaire_site_web' => 'Désactiver l\'annuaire de sites Web',
	'item_non_utiliser_syndication' => 'Ne pas utiliser la syndication automatique',
	'item_utiliser_syndication' => 'Utiliser la syndication automatique',

	// L
	'lien_mise_a_jour_syndication' => 'Mettre à jour maintenant',
	'lien_nouvelle_recuperation' => 'Tenter une nouvelle récupération des données',
	'lien_purger_syndication' => 'Effacer tous les articles syndiqués', # NEW

	// N
	'nombre_articles_syndic' => '@nb@ articles syndiqués', # NEW

	// S
	'statut_off' => 'Supprimé', # NEW
	'statut_prop' => 'En attente', # NEW
	'statut_publie' => 'Publié', # NEW
	'syndic_choix_moderation' => 'Que faire des prochains liens en provenance de ce site ?',
	'syndic_choix_oublier' => 'Que faire des liens qui ne figurent plus dans le fichier de syndication ?',
	'syndic_choix_resume' => 'Certains sites diffusent le texte complet des articles. Lorsque celui-ci est disponible souhaites-tu syndiquer :',
	'syndic_lien_obsolete' => 'lien obsolète',
	'syndic_option_miroir' => 'les bloquer automatiquement',
	'syndic_option_oubli' => 'les effacer (après @mois@ mois)',
	'syndic_option_resume_non' => 'le contenu complet des articles (au format HTML)',
	'syndic_option_resume_oui' => 'un simple résumé (au format texte)',
	'syndic_options' => 'Options de syndication :',

	// T
	'texte_liens_sites_syndiques' => 'Les liens issus des sites syndiqués peuvent
			être bloqués a priori ; le réglage
			ci-dessous indique le réglage par défaut des
			sites syndiqués après leur création. Il
			est ensuite possible, de toutes façons, de
			débloquer chaque lien individuellement, ou de
			choisir, site par site, de bloquer les liens à venir
			de tel ou tel site.',
	'texte_messages_publics' => 'Messages publics de l\'article :',
	'texte_non_fonction_referencement' => 'Tu peux préférer ne pas utiliser cette fonction automatique, et indiquer toi-même les éléments concernant ce site...',
	'texte_referencement_automatique' => '<b>Référencement automatisé d\'un site</b><br />Tu peux référencer rapidement un site Web en indiquant ci-dessous l\'adresse URL désirée, ou l\'adresse de son fichier de syndication. SPIP va récupérer automatiquement les informations concernant ce site (titre, description...).',
	'texte_referencement_automatique_verifier' => 'Vérifie les informations fournies par <tt>@url@</tt> avant d\'enregistrer.',
	'texte_syndication' => 'Il est possible de récupérer automatiquement, lorsqu\'un site Web le permet,
  la liste de ses nouveautés. Pour cela, tu dois activer la syndication.
  <blockquote><i>Certains hébergeurs désactivent cette fonctionnalité ;
  dans ce cas, tu ne pourras pas utiliser la syndication de contenu
  depuis ton site.</i></blockquote>',
	'titre_articles_syndiques' => 'Articles syndiqués tirés de ce site',
	'titre_dernier_article_syndique' => 'Derniers articles syndiqués',
	'titre_page_sites_tous' => 'Les sites référencés',
	'titre_referencement_sites' => 'Référencement de sites et syndication',
	'titre_site_numero' => 'SITE NUMÉRO :',
	'titre_sites_proposes' => 'Les sites proposés',
	'titre_sites_references_rubrique' => 'Les sites référencés dans cette rubrique',
	'titre_sites_syndiques' => 'Les sites syndiqués',
	'titre_sites_tous' => 'Les sites référencés',
	'titre_syndication' => 'Syndication de sites',
	'tout_voir' => 'Voir tous les articles syndiqués', # NEW

	// U
	'un_article_syndic' => '1 article syndiqué' # NEW
);

?>