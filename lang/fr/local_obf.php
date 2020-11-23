<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'local_obf', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   local_obf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitycompletedby'] = 'Achevé par';
$string['addcourses'] = 'Ajouter les cours sélectionnés';
$string['addcriteria'] = 'Créer une nouvelle règle d\'attribution';
$string['addemaildescription'] = 'Entrez votre adresse de courriel. Si l\'adresse n\'a pas été vérifiée, un code de vérification sera envoyé à cette adresse.';
$string['addemailheader'] = 'Ajoutez et vérifiez votre adresse de courriel.';
$string['addnewcriterion'] = 'Ajouter le cours';
$string['apidataretrieve'] = 'Récupérer les événements';
$string['apidataretrieveall'] = 'Tous';
$string['apidataretrievedesc'] = 'Si vous sélectionnez « Tous », les badges émis directement de Open Badge Factory seront inclus dans tous les résultats de badges.';
$string['apidataretrievelocal'] = 'Evénements produits par ce système';
$string['apierror'] = 'Le service OBF n\'a pas été trouvé. Veuillez vérifier l\'URL de l\'API dans les paramètres.';
$string['apierror0'] = 'La requête du service Open Badge Factory a échoué. L\'administrateur du site doit configurer les paramètres de ce plugin.';
$string['apierror400'] = 'La requête du service OBF a échoué à cause d\'une erreur ou d\'un paramètre manquant.';
$string['apierror403'] = 'Open Badge Factory a rejeté la requête. L\'administrateur du site doit ré-authentifier le client Open Badge Factory.';
$string['apierror404'] = 'Impossible de trouver le service OBF. Veuillez vérifier l\'URL de l\'API dans les paramètres.';
$string['apierror405'] = '405 Méthode non autorisée';
$string['apierror411'] = '411 Longueur requise';
$string['apierror413'] = '413 Requête trop grande';
$string['apierror429'] = '429 Trop de requêtes';
$string['apierror495'] = '495 Erreur de certificat';
$string['apierror496'] = 'Le certificat doit être généré avant que Open Badge Factory soit utilisé avec Moodle. Connectez-vous à Open Badge Factory pour obtenir le jeton de requête et collez-le dans le champ ci-dessous.';
$string['apierror500'] = '500 Erreur interne du serveur';
$string['apierror502'] = '502 Mauvaise passerelle';
$string['apierror503'] = 'Le service OBF est temporairement indisponible. Veuillez réessayer plus tard.';
$string['authenticate'] = 'Authentifier';
$string['authenticationsuccess'] = 'Authentification réussie.';
$string['availablecategories'] = 'Catégories disponibles';
$string['availablecategorieshelp'] = 'Sélectionnez les catégories dont les badges peuvent être utilisés dans les événements d\'émission de cette institution. Si aucune des catégories n\'est sélectionnée, les badges de chaque catégorie peuvent être émis.';
$string['availablecategoriesselect'] = 'Catégories';
$string['back'] = 'Retour';
$string['backpackconfig'] = 'Paramètres du sac à badges';
$string['backpackconnected'] = 'Connecté';
$string['backpackdisconnected'] = 'Déconnecté';
$string['backpackemail'] = 'Adresse de courriel';
$string['backpackemailaddexternalbackpackprovider'] = '<p>Impossible de trouver un utilisateur correspondant à l\'adresse de courriel \'<strong>{$a->useremail}</strong>\' dans {$a->backpackproviderfullname}.</p><p>Vérifiez que vous avez un compte sur <a href="{$a->backpackprovidersiteurl}">{$a->backpackprovidersiteurl}</a> et que \'<strong>{$a->useremail}</strong>\' est ajouté à votre profil.</p>';
$string['backpackemailaddexternalobp'] = '<p>Impossible de trouver un utilisateur correspondant à l\'adresse de courriel \'<strong>{$a}</strong>\' dans Open Badge Passport.</p><p>Pour ajouter votre courriel, ouvrez <a href="https://openbadgepassport.com">https://openbadgepassport.com</a> dans votre navigateur et connectez-vous. </p><p>Après vous être connecté suivez le<strong><i>Mon compte > Paramètres du compte > Adresses de courriel</i></strong> chemin de navigation.</p><p>Avec la page <i>Adresses de courriel</i> ouverte, ajoutez \'<strong>{$a}</strong>\' dans le champ \' Ajouter nouveau courriel \' et enregistrez.</p>';
$string['backpackemail_help'] = 'Adresses de courriel associées à votre compte de sac à badges Mozilla.';
$string['backpackemailnotfound'] = 'Impossible de trouver un utilisateur avec le courriel « {$a->email} » venant de {$a->provider}.';
$string['backpackgroups'] = 'Groupes de badges';
$string['backpackgroups_help'] = 'Sélectionnez les groupes de badges à montrer dans votre afficheur de badges.';
$string['backpackprovideractions'] = 'Actions';
$string['backpackprovideremailconfigureable'] = 'L\'utilisateur peut définir une adresse de courriel';
$string['backpackproviderfullname'] = 'Nom complet';
$string['backpackprovidersettings'] = '{$a} -paramètres';
$string['backpackprovidershortname'] = 'Nom court';
$string['backpackproviderurl'] = 'URL';
$string['backpackproviderurlinvalid'] = 'L\'URL n\'est pas définie précisément, veuillez utiliser l\'URL complète, par exemple https://openbadgepassport.com/displayer/';
$string['backpackprovideruserwarning'] = 'Attention : {$a} utilisateurs ont déjà des adresses de courriel associées pour le fournisseur. Créez des nouveaux fournisseurs quand vous ajoutez de nouveaux services, ne modifiez pas les fournisseurs existants pour pointer vers d\'autres services.';
$string['backpacksettings'] = 'Paramètres du sac à badges';
$string['badgeactions'] = 'Actions';
$string['badgeblacklist'] = 'Badges cachés';
$string['badgecategories'] = 'Catégories';
$string['badgecreated'] = 'Créé le';
$string['badgecriteria'] = 'Règles d\'attribution';
$string['badgecriteriaurl'] = 'URL des critères';
$string['badgedescription'] = 'Description';
$string['badgedetails'] = 'Détails du badge';
$string['badgeemail'] = 'Gabarit courriel';
$string['badgeexpiresby'] = 'Expire le';
$string['badgeexport'] = 'Exporter les badges créés précédemment dans Moodle';
$string['badgeexportdescription'] = 'Une copie de tous les badges sélectionnés sera faite dans Open Badge Factory.';
$string['badgeexportzeroexportable'] = 'Aucun badge exportable trouvé, ou tous les badges sont déjà exportés.';
$string['badgehistory'] = 'Historique attribution';
$string['badgeimage'] = 'Badge';
$string['badgeissued'] = 'Le badge a été émis avec succès.';
$string['badgeissuedwhen'] = 'Ce badge est attribué automatiquement lorsque l\'une des règles suivantes est respectée :';
$string['badgelist'] = 'Liste de badges';
$string['badgelisttitle'] = 'Tous les badges';
$string['badgename'] = 'Nom';
$string['badgetags'] = 'Mots-clés';
$string['badgewasautomaticallyissued'] = 'Après examen, le badge a été attribué à {$a} destinataire(s).';
$string['blacklistbadge'] = 'Ne pas montrer le badge';
$string['blacklistdescription'] = 'Sélectionnez les badges que vous ne voulez pas afficher sur votre profil. Vous pouvez cacher n\'import quel badge émis par cet environnement Moodle.';
$string['blacklistsaved'] = 'Liste noire sauvegardée.';
$string['cachedef_obf_assertions'] = 'Cache d\'assertion de badge OBF';
$string['cachedef_obf_assertions_backpacks'] = 'Service externe de cache de badge ouvert';
$string['cachedef_obf_pub_badge'] = 'Cache de données d\'événement spécifique publiquement accessible';
$string['cancel'] = 'Annuler';
$string['cannoteditcriterion'] = 'Cette règle ne peut être modifiée car le badge a déjà été attribué automatiquement en se basant sur cette règle.';
$string['categorysettings'] = 'Paramètres de catégorie';
$string['certificateexpirationremindertask'] = 'Rappel d\'expiration du certificat';
$string['certrequestfailed'] = 'Une erreur s\'est produite lors de la demande du certificat à partir de l\'API';
$string['closepopup'] = 'Fermer';
$string['completedbycriterion'] = 'par <strong>{$a}</strong>';
$string['configurecriteria'] = 'Configurer';
$string['confirmcriteriondeletion'] = 'Voulez-vous vraiment supprimer cette règle ?';
$string['confirmdelete'] = 'Voulez-vous vraiment supprimer cet enregistrement {$a} ?';
$string['confirmrevokation'] = 'Voulez-vous vraiment révoquer le badge de l\'utilisateur ?';
$string['connect'] = 'Connecter {$a}';
$string['connectionisworking'] = 'La connexion OBF est active et fonctionne. Le certificat du client expire dans <strong>{$a}</strong>.';
$string['connectionstatus'] = 'Statut de la connexion';
$string['coursealreadyincriterion'] = 'La règle d\'attribution automatique de ce badge dans ce cours ne peut pas être modifiée, car cette combinaison cours/badge existe déjà dans une autre règle contenant des cours multiples.';
$string['coursebadgelisttitle'] = 'Badges en rapport avec ce cours';
$string['coursecompletedby'] = 'Achevé par';
$string['coursecompletionnotenabled'] = 'Le suivi d\'achèvement n\'est pas activé dans ce cours. Activez-le dans les <a href="{$a}">paramètres du cours</a>.';
$string['courseeventhistory'] = 'Historique d\'attribution du cours';
$string['courseobfbadges'] = 'Badges';
$string['courserequired'] = 'Au moins un cours doit être sélectionné';
$string['coursereset'] = 'Supprimer les règles d\'attribution quand le cours est réinitialisé.';
$string['courseuserbadges'] = 'Badges de l\'utilisateur';
$string['criteria_3'] = 'Champs de profil';
$string['criteria_3_help'] = 'Quels champs de profils ont besoin d\'être renseignés pour déclencher l\'attribution de badges.';
$string['criteriaaddcourse'] = 'Ajouter un cours';
$string['criteriaaddendum'] = 'Complément de critères';
$string['criteriaaddendumadd'] = 'Ajouter un complément de critères';
$string['criteriaaddendumheader'] = 'Complément de critères';
$string['criteriaaddendum_help'] = 'Un complément de critères sera ajouté au badge émis. Ce complément sera affiché sous les critères du badge. Note : Markdown est pris en charge.';
$string['criteriacompletedwhen'] = 'Cette règle est satisfaite quand…';
$string['criteriacompletedwhenall'] = 'Tous les cours suivants doivent être achevés :';
$string['criteriacompletedwhenany'] = 'L\'un des cours suivants doit être achevé :';
$string['criteriacompletionmethodall'] = 'Tous ces cours doivent être achevés';
$string['criteriacompletionmethodany'] = 'L\'un de ces cours est achevé';
$string['criteriacompletionmethodprofileall'] = 'Tous les champs de profil sélectionnés doivent être renseignés';
$string['criteriacompletionmethodprofileany'] = 'Aucun des champs de profil n\'a été renseigné';
$string['criteriacourses'] = 'Cours dans cette règle';
$string['criteriapartofcourseset'] = 'Fait partie de critères sur plusieurs cours';
$string['criteriapreview'] = 'Aperçu des critères du badge';
$string['criteriatypeactivity'] = 'Achever un ensemble d\'activités';
$string['criteriatypecourse'] = 'Achever un ensemble de cours';
$string['criteriatypecourseset'] = 'Achever un ensemble de cours';
$string['criteriatypeprofile'] = 'Achèvement du profil';
$string['criteriatypetotaracertif'] = 'Obtenir un certificat';
$string['criteriatypetotaraprogram'] = 'Achever un programme';
$string['criteriatypeunknown'] = 'Critères incomplets';
$string['criteriondeleted'] = 'La règle d\'attribution a été supprimée.';
$string['criterionsaved'] = 'La règle d\'attribution a été enregistrée.';
$string['csrexportfailed'] = 'Une erreur est survenue lors de la tentative d\'export de la requête de signature du certificat';
$string['dateformatdate'] = '%Y-%m-%d';
$string['deauthenticate'] = 'Déconnecter';
$string['deauthenticationsuccess'] = 'Déconnecté avec succès de Open Badge Factory.';
$string['deletecriterion'] = 'Supprimer la règle d\'attribution';
$string['disableassertioncache'] = 'Désactiver le cache des assertions de badge';
$string['disableassertioncache_help'] = 'Les badges sur les profils ne seront pas mis en cache. Les badges venant de l\'extérieur de l\'environnement de Moodle apparaîtront sans délai sur les pages de profil, mais cela peut affecter le temps de chargement de la page.';
$string['disablemoodlebadges'] = 'Désactiver le module de badge de Moodle.';
$string['disablemoodlebadges_help'] = 'Les anciens badges de Moodle seront cachés de l\'interface utilisateur, mais les badges des utilisateurs sauvegardés dans un sac à badges pourront toujours être affichés, et les badges exportés vers Open Badge Factory pourront toujours être attribués.';
$string['disconnect'] = 'Déconnecter {$a}';
$string['displaymoodlebadges'] = 'Afficher les badges de Moodle sur les profils';
$string['displaymoodlebadges_help'] = 'Les anciens badges de Moodle seront affichés sur les pages de profil des utilisateurs.';
$string['edit'] = 'Modifier';
$string['editemailmessage'] = 'Modifier le message de courriel';
$string['emailbadgerevokedbody'] = 'L\'un de vos badges ({$a->revokedbadgename}) a été révoqué par {$a->revokername}.';
$string['emailbadgerevokedsubject'] = 'Votre badge a été révoqué';
$string['emailbody'] = 'Corps du courriel';
$string['emailfooter'] = 'Pied de page du courriel';
$string['emaillinktext'] = 'Lien textuel du courriel';
$string['emailmessage'] = 'Message du courriel';
$string['emailsubject'] = 'Objet du message';
$string['emailtemplatedescription'] = 'Ici vous pouvez paramétrer le modèle par défaut du courriel qui sera envoyé à l\'utilisateur recevant ce badge. Ce courriel peut être personnalisé avant que le badge ne soit attribué.';
$string['emailtemplatesaved'] = 'Le modèle de courriel a été enregistré avec succès.';
$string['emailverifytokenemailbody'] = 'Vous devez vérifier votre adresse de courriel.
Code de vérification: {$a->token}
URL de vérification: {$a->tokenurl}';
$string['emailverifytokenemailsubject'] = 'Vérification du courriel';
$string['error:nosuchfield'] = 'Pas de champ de ce type.';
$string['eventrevoked'] = 'Événement révoqué pour {$a}';
$string['evidence'] = 'Preuve';
$string['expired'] = 'Expiré';
$string['expiresby'] = 'Expire';
$string['expiringcertificate'] = 'La clé API Open Badge Factory API expire dans <b>{$a->days}</b> jours. Pour renouveler votre clé API <a href="{$a->obfurl}">connectez-vous à Open Badge Factory</a> avec votre compte admin, allez dans Outils d\'administration -> Modifier les détails de l\'organisation -> Plus de paramètres, générer le jeton de demande de certificat et renouveler la clé <a href="{$a->configurl}">Open Badges -> Paramètres -> Jeton de demande OBF </a>.';
$string['expiringcertificatesubject'] = 'Le certificat client de Open Badge Factory va expirer';
$string['exportextrasettings'] = 'Exporter les paramètres';
$string['exportsettings'] = 'Exporter les paramètres';
$string['gradecriterion'] = 'avec <strong>une note minimum de {$a}</strong>';
$string['history'] = 'Historique d\'attribution';
$string['historyrecipients'] = '{$a} bénéficiaires';
$string['invalidtab'] = 'Page non trouvée';
$string['issuancedetails'] = 'Détails de l\'émission';
$string['issue'] = 'Émettre le badge';
$string['issueandexpiration'] = 'Dates de délivrance et expiration';
$string['issuebadge'] = 'Décerner un badge';
$string['issuedon'] = 'Date d\'émission';
$string['issuer'] = 'Emetteur';
$string['issuerdescription'] = 'Description';
$string['issuerdetails'] = 'Détails de l\'émetteur';
$string['issueremail'] = 'Courriel';
$string['issuername'] = 'Nom';
$string['issuerurl'] = 'URL';
$string['issuethisbadge'] = 'Décerner ce badge';
$string['makeexporteddrafts'] = 'Les badges exportés sont en mode brouillon par défaut';
$string['messageprovider:revoked'] = 'Le badge émis est révoqué';
$string['minimumgrade'] = 'Note minimale';
$string['nobackpackgroups'] = 'Pas de groupe public de badges dans votre sac à badges. Créez au moins un groupe public dans votre sac à badges.';
$string['nobadgehistory'] = 'Ce badge n\'a pas encore été émis.';
$string['nobadges'] = 'Pas de badges pour l\'instant.';
$string['nobadgesincourse'] = 'Pas encore de badges liés.';
$string['nobadgestoexport'] = 'Pas de badges à exporter.';
$string['nocourseswithcompletionenabled'] = 'Il n\'y a pas de cours avec l\'achèvement activé.';
$string['nocriteriayet'] = 'Pas encore de règles automatiques de créées.';
$string['nohistory'] = 'Pas encore de bagdes émis.';
$string['noparticipants'] = 'Pas de participants.';
$string['nouserbadges'] = 'Pas encore de badges obtenus.';
$string['novalidcourses'] = 'Il n\'y a pas de cours avec des règles d\'attribution liés à ce badge.';
$string['numberofbadgesmany'] = 'badges';
$string['numberofbadgessingle'] = 'badge';
$string['obf'] = 'Badges ouverts';
$string['obf:configure'] = 'Configurer le client OBF';
$string['obf:configureuser'] = 'Configurer les propres paramères';
$string['obfconnectionconfig'] = 'Paramètres de connexion API';
$string['obf:earnbadge'] = 'Obtenez un badge ouvert';
$string['obf:editcriterion'] = 'Editer les critères du badge';
$string['obf:issuebadge'] = 'Décerner le badge à un utilisateur';
$string['obf:revokeallevents'] = 'Révoquer l\'événement';
$string['obf:revokecourseevents'] = 'Révoquer un événement, qui a été automatiquement émis sur base de critères de cours.';
$string['obf:seeparticipantbadges'] = 'Voir les badges des participants du cours';
$string['obfuserpreferences'] = 'Paramètres des badges ouverts';
$string['obf:viewallbadges'] = 'Voir les badges disponibles';
$string['obf:viewallevents'] = 'Afficher les événements d\'émission de badge';
$string['obf:viewbackpack'] = 'Voir les sacs à badges';
$string['obf:viewcourseevents'] = 'Afficher les événements d\'émission de badge de cours';
$string['obf:viewdetails'] = 'Voir les détails du badge';
$string['obf:viewhistory'] = 'Afficher l\'historique des émissions des badges';
$string['obf:viewownbackpack'] = 'Voir son propre sac à badges';
$string['obpbackpacksettings'] = 'Paramètres de Open Badge Passport';
$string['personalbadgecloudservices'] = 'Badge Cloud';
$string['pkidirnotwritable'] = 'Le dossier certificate <i>{$a}</i> devrait être ouvert en écriture pour le serveur web.';
$string['pluginname'] = 'Open Badge Factory';
$string['previewbadge'] = 'Prévisualiser le badge';
$string['previewcriteria'] = 'Prévisualiser';
$string['previewemail'] = 'Prévisualiser';
$string['profilebadgelist'] = 'Badges';
$string['profilebadgelistbackpackprovider'] = '{$a} badges';
$string['profilebadgelistmoz'] = 'Badges du sac à badges';
$string['profilebadgelistobp'] = 'Badges de l\'Open Badge Passport';
$string['pubkeyextractionfailed'] = 'Une erreur est survenue lors de l\'extraction de la clé publique du certificat.';
$string['pubkeyrequestfailed'] = 'Une erreur est survenue lors de la demande la clé publique de l\'API';
$string['readmeenablecompletion'] = 'Critères d\'obtention de badge';
$string['readmeenablecompletion_help'] = '<p> Pour que les critères automatiques d\'attribution de badges fonctionnent correctement, le suivi de l\'achèvement doit être activé. </ p> <p> Le moyen le plus simple d\'activer le suivi de l\'achèvement est : </ p> <ol> <li> Localisez le -bloc « Paramètres ». </ li> <li> Tapez « enablecompletion » dans la zone de recherche, et cliquez sur le bouton rechercher. </ li> <li> Activer le suivi de l\'achèvement : Oui. </ li> <li> Facultatif, mais recommandé: Activer le suivi de l\'achèvement sur les paramètres par défaut du cours. </ li> </ ol> <strong> Paramètres du cours < / strong> <p> Si le suivi de l\'achèvement n\'est pas activé sur les paramètres par défaut du cours, ou si le suivi des cours est désactivé pour un cours, le suivi de l\'achèvement peut être activé via la page <i> Administration du cours - & gt; Modifier les paramètres </ i> -page . </ p>';
$string['recipientcandidates'] = 'Utilisateurs correspondant à la recherche';
$string['recipients'] = 'Destinataires';
$string['requesttoken'] = 'Jeton de demande OBF';
$string['requesttoken_help'] = '<p> Collez ici le jeton utilisé pour se connecter à l\'API de Open Badge Factory. </ p> <p> Pour générer la clé API requise, connectez-vous à <a href="https://openbadgefactory.com"> Open Badge Factory </a>, sur la page \'<i> Outils d\'administration </ i>\', ouvrez le -lien "<i> Clé API </ i> \'-link, et cliquez sur\' <i> Générer le jeton de demande de signature de certificat </ i> \'. Copiez le jeton généré dans Moodle. </ P>';
$string['resetfilter'] = 'Réinitialiser le filtre';
$string['reviewcriterionaftersave'] = 'Examiner la règle après l\'enregistrement';
$string['reviewcriterionaftersave_help'] = 'Si cette case est cochée, la règle sera examinée après la sauvegarde et si quelqu\'un a déjà satisfait cette règle plus tôt, ce badge sera automatiquement attribué.';
$string['revoke'] = 'Révoquer';
$string['revokeuserbadges'] = 'Révoquer les badges de l\'utilisateur';
$string['saveconfiguration'] = 'Continuer';
$string['savecriteria'] = 'Enregistrer';
$string['savesettings'] = 'Enregistrer';
$string['selectactivity'] = 'Sélectionner l\'activité';
$string['selectatleastonerecipient'] = 'Sélectionner au moins un bénéficiaire';
$string['selectbadge'] = 'Sélectionner un badge';
$string['selectbadgestoexport'] = 'Sélectionner les badges que vous voulez exporter vers Open Badge Factory';
$string['selectcompletionmethod'] = 'Sélectionner la méthode d\'achèvement';
$string['selectcompletionmethod_help'] = 'Sélectionnez la méthode par laquelle le badge est obtenu.';
$string['selectcourses'] = 'Sélectionner les cours';
$string['selectcourses_help'] = 'Sélectionnez les cours qui doivent être achevés afin de recevoir ce badge automatiquement.';
$string['selectcriteriatype'] = 'Sélectionner…';
$string['selectcriteriatype_help'] = 'Sélectionner la méthode par laquelle le badge est attribué.';
$string['selectprogram'] = 'Sélectionner un parcours';
$string['selectrecipients'] = 'Sélectionner des bénéficiaires';
$string['settings'] = 'Paramètres';
$string['settingssaved'] = 'Paramètres enregistrés';
$string['showassertion'] = 'Détails';
$string['showbadgecriteria'] = 'Critères de badge ouvert';
$string['showbadges'] = 'Afficher les badges';
$string['showbadgesonmyprofile'] = 'Afficher les badges sur la page de profil';
$string['showcategories'] = 'Afficher les badges de ces catégories :';
$string['showconnectionconfig'] = 'Je sais que ça marche, laissez-moi changer ce programme tout de même.';
$string['showmorerecipients'] = 'plus';
$string['testbackpackapiurlexception'] = 'Erreur en testant l\'API via <a href="{$a->url}">{$a->url}</a> ! Code d\'erreur : {$a->errorcode}.';
$string['toearnthisbadge'] = 'Pour obtenir ce badge un cours doit être achevé';
$string['tokendecryptionfailed'] = 'La déchiffrement du jeton de requête a échoué. Assurez-vous de coller intégralement le jeton de demande de signature de certificat.';
$string['totaraprogram'] = 'Parcours';
$string['totaraprogramexpiresbybadge'] = 'Expiration des propriétés de badge';
$string['totaraprogramexpiresbycertificate'] = 'Expiration des propriétés de certificat';
$string['totaraprogramselectexpires'] = 'Sélectionnez quels paramètres sont utilisées pour attribuer les badges';
$string['unknowncriterion'] = 'Critère incomplet';
$string['urlgroup'] = 'URL';
$string['urlgroup_help'] = '<p>Si vous n\'utilisez pas le serveur par défaut de Open Badge Factory, définissez l\'adresse du service ici</p>';
$string['userpreferences'] = 'Paramètres de l\'utilisateur';
$string['userpreferencessaved'] = 'Paramètres de l\'utilisateur enregistrés.';
$string['userscanmanagedisplayofbadges'] = 'L\'utilisateur peut choisir d\'afficher des badges';
$string['usersdisplaybadges'] = 'Affichage des badges utilisateur';
$string['usersforcedtodisplaybadges'] = 'Les badges sont affichés sur les pages de profil';
$string['usersnotallowedtodisplaybadges'] = 'Les badges ne sont pas affichés sur les pages de profil';
$string['verification_failed'] = 'La vérification du sac à badges a échoué. Raison : {$a}';
$string['verifytoken'] = 'Jeton';
$string['verifytokenbutton'] = 'Vérifier';
$string['verifytokendescription'] = 'Un courriel a été envoyé à l\'adresse fournie. Vérifiez votre courriel pour un code de vérification.';
$string['warningcannoteditafterreview'] = 'Notez que si le badge est attribué lorsque ces règles sont en cours d\'examen, la (les) règle (s) ne peuvent plus être modifiées. Une fois que le badge a été attribué automatiquement à au moins une personne, l\'édition des règles est interdite. Assurez-vous donc que les règles sont définies correctement avant d\'être examinées.';
