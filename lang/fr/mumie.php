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
 * Strings for component 'mumie', language 'fr', branch 'MOODLE_38_STABLE'
 *
 * @package   mumie
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['completionpass'] = 'Exiger une note pour passer';
$string['completionpass_help'] = 'Si cette option est activée, l\'activité est considérée comme terminée lorsque l\'élève reçoit une note de passage, la note de passage étant définie dans le carnet de notes.
<br><br><b>Veuillez noter :</b><br>
Les notes des activités MUMIE ne sont mises à jour que lorsque le carnet de notes est ouvert. Si vous souhaitez connaître l\'état d\'avancement actuel de tous les élèves, n\'oubliez pas d\'ouvrir d\'abord la page de présentation du carnet de notes';
$string['dnd_addmessage'] = 'Ajouter une activité MUMIE ici';
$string['dndupload_message'] = 'Ajouter comme nouvelle activité MUMIE';
$string['gradetopassmustbeset'] = '<i>La note de passage</i> ne peut pas être nulle car la méthode d\'achèvement de cette activité exige une note de passage. Veuillez définir une valeur non nulle.';
$string['gradetopassnotset'] = 'Cette activité MUMIE n\'a pas de <i>note de passage</i> définie donc vous ne pouvez pas utiliser cette option. Veuillez utiliser le paramètre de note requise à la place.';
$string['modulename'] = 'Activité MUMIE';
$string['modulename_help'] = 'Ce module d\'activité permet d\'utiliser le contenu de la plateforme d\'apprentissage en ligne MUMIE et de synchroniser automatiquement les notes. Une activité MUMIE représente un problème noté individuellement dans un cours.</p>
<p><strong>Qu\'est-ce que MUMIE?</strong></p>
<p>MUMIE est une plateforme d\'apprentissage en ligne pour apprendre et enseigner les mathématiques et les sciences informatiques. Elle est née des besoins en remédiation à l\'interface entre le lycée et l\'université. MUMIE est très flexible et peut être intégrée à d\'autres systèmes d\'apprentissage et de gestion de contenu. Ses cours et son matériel pédagogique de haute qualité peuvent être facilement adaptés à tout type de scénario pédagogique. Il propose des environnements d\'apprentissage et de formation intégrés avec des réseaux sociaux dédiés de type wiki pour des tutoriels virtuels et un apprentissage auto-organisé améliorant les compétences cognitives et méta-cognitives. De puissants outils de création permettent la production de nouveaux contenus. Cela ouvre la porte à des scénarios pédagogiques nouveaux, stimulants et plus efficaces.<br /><br /> Pour plus d\'informations, veuillez consulter notre <a href="https://www.mumie.net/platform/" target="_blank" rel="nofollow noreferrer noopener">site internet</a>.</p>
<p><strong>Caractéristiques principales de l\'activité MUMIE</strong></p>
<ul>
<li><strong>Utilisez les Activités MUMIE dans moodle</strong><br /> Ajoutez un nombre quelconque d\'activités MUMIE à votre cours moodle grâce à un formulaire facile à utiliser.</li>
<li><strong>Obtenir la dernière version</strong><br /> Dès que la dernière version est disponible sur un serveur MUMIE, vous pouvez l\'utiliser immédiatement dans vos cours moodle. Aucune mise à jour n\'est nécessaire !</li>
<li><strong>Multiples langages</strong><br /> La plupart des contenus des serveurs MUMIE sont disponibles en plusieurs langues. Vous pouvez changer la langue dans laquelle une activité MUMIE est affichée pour tous les élèves en cliquant sur un bouton.</li>
<li><strong>Synchronisation automatique des notes</strong><br />Toutes les activités MUMIE sont notées et leurs résultats sont automatiquement ajoutés au carnet de notes de moodle.</li>
<li><strong>Signature unique à l\'entrée et signature automatique à la sortie</strong><br /> Les étudiants n\'ont pas besoin de créer un nouveau compte pour se connecter aux serveurs MUMIE. Cela se fait automatiquement pour eux dès qu\'ils commencent une activité MUMIE. Pour sécuriser leurs données, ils sont également automatiquement déconnectés de tous les serveurs MUMIE, lorsqu\'ils quittent moodle.</li>
</ul>';
$string['modulenameplural'] = 'Activités MUMIE';
$string['mumie:addinstance'] = 'Ajouter une nouvelle activité MUMIE';
$string['mumie_due_date'] = 'Date limite';
$string['mumie_form_activity_container'] = 'Container de lancement';
$string['mumie_form_activity_container_embedded'] = 'Intégrée';
$string['mumie_form_activity_container_help'] = 'Choisir si on désire que l\'activité soit ouverte dans une nouvelle fenêtre du navigateur ou intégrée dans moodle.<br><br>Notez que les activités MUMIE intégrées ne peuvent pas être ouvertes avec Safari en raison de limitations techniques. Pour les utilisateurs de Safari l\'activité MUMIE s\'ouvrira plutôt dans un onglet';
$string['mumie_form_activity_container_window'] = 'Nouvelle fenêtre';
$string['mumie_form_activity_course'] = 'Cours MUMIE';
$string['mumie_form_activity_header'] = 'Général';
$string['mumie_form_activity_language'] = 'Langue';
$string['mumie_form_activity_language_help'] = 'Veuillez sélectionner la langue dans laquelle l\'activité doit être affichée.';
$string['mumie_form_activity_name'] = 'Nom';
$string['mumie_form_activity_problem'] = 'Problème MUMIE';
$string['mumie_form_activity_problem_help'] = 'Un problème MUMIE est un exercice unique noté sur MUMIE';
$string['mumie_form_activity_server'] = 'Serveur MUMIE';
$string['mumie_form_activity_server_help'] = 'Veuillez sélectionner un serveur MUMIE pour obtenir une liste actualisée des activités et des cours disponibles.';
$string['mumie_form_add_server_button'] = 'Ajouter un serveur MUMIE';
$string['mumie_form_already_existing_config'] = 'Il existe déjà une configuration pour ce préfixe URL';
$string['mumie_form_already_existing_name'] = 'Il existe déjà une configuration pour ce nom';
$string['mumie_form_complete_course'] = 'Accéder à l\'ensemble du cours';
$string['mumie_form_complete_course_help'] = 'L\'utilisateur sera uniquement connecté et redirigé vers la page de présentation du cours. Les notes <b>ne seront pas</b> synchronisées pour cette activité MUMIE.';
$string['mumie_form_coursefile'] = 'Chemin d\'accès au fichier des métadonnées du cours MUMIE';
$string['mumie_form_due_date'] = 'Date limite';
$string['mumie_form_due_date_help'] = 'Si cette option est activée, les notes obtenues après la date sélectionnée ne seront pas synchronisées avec Moodle';
$string['mumie_form_due_date_must_be_future'] = 'Vous devez choisir une date à venir !';
$string['mumie_form_filter'] = 'Filtrer les problèmes MUMIE';
$string['mumie_form_grade_pool'] = 'Partager les notes avec d\'autres cours';
$string['mumie_form_grade_pool_help'] = 'Choisir de partager ou non les notes avec d\'autres cours de Moodle.<br>Si le partage est activé, les points obtenus dans les problèmes MUMIE dans d\'autres cours seront automatiquement synchronisés avec le carnet de notes de ce cours.<br>Sinon, ce cours ne pourra ni importer ni exporter les notes.';
$string['mumie_form_grade_pool_note'] = '<b>Note :</b><br> Cette décision a été <b>définitive</b> et affecte toutes les autres activités MUMIE de ce cours';
$string['mumie_form_grade_pool_warning'] = '<b style="color:red">Avertissement :</b><br> Cette décision est <b>définitive</b> et affecte toutes les autres activités MUMIE de ce cours';
$string['mumie_form_missing_server'] = 'Nous n\'avons pas pu trouver de configuration du serveur MUMIE utilisé dans le cadre de cette activité MUMIE.<br><br>
Les propriétés : <i>Serveur MUMIE</i>, <i>Cours MUMIE</i>, <i>Problème MUMIE</i> et <i>Langue</i> sont verrouillées pour l\'édition jusqu\'à ce qu\'un nouveau serveur MUMIE soit ajouté pour le préfixe URL suivant :<br><br>';
$string['mumie_form_points'] = 'Nombre maximum de points';
$string['mumie_form_points_help'] = 'Veuillez indiquer le nombre maximum de points qu\'un étudiant peut obtenir en réalisant l\'activité. <br>Les notes sont calculées et mises à jour automatiquement.';
$string['mumie_form_required'] = 'requis';
$string['mumie_form_server_added'] = 'Le serveur MUMIE a été ajouté';
$string['mumie_form_server_btn_cancel'] = 'Annuler';
$string['mumie_form_server_btn_submit'] = 'Envoyer';
$string['mumie_form_server_config'] = 'Configuration du serveur MUMIE';
$string['mumie_form_server_not_existing'] = 'Il n\'y a pas de serveur MUMIE pour cette URL';
$string['mumie_form_title'] = 'Configurer le serveur MUMIE';
$string['mumieintro'] = 'Description de l\'activité';
$string['mumie_server_name'] = 'Nom du serveur';
$string['mumie_server_name_help'] = 'Veuillez insérer un nom spécifique pour cette configuration.';
$string['mumie_tag_disabled'] = 'Désactivée';
$string['mumie_tag_disabled_help'] = 'Cette activité est désactivée car la configuration n\'est pas terminée. Veuillez ouvrir les paramètres de cette activité MUMIE.';
$string['mumie_url_prefix'] = 'Préfixe URL MUMIE';
$string['mumie_url_prefix_help'] = 'Précisez le préfixe URL MUMIE <br><br> par exemple <b>https://www.ombplus.de/ombplus</b>.<br><br> Il ne peut y avoir qu\'une seule configuration pour tout préfixe URL.';
$string['mumie:viewgrades'] = 'Afficher toutes les notes des activités MUMIE d\'un cours';
$string['name'] = 'Nom';
$string['nomumieinstance'] = 'Il n\'y a pas de contenus MUMIE dans ce cours';
$string['parameter_missing'] = 'Le fichier téléchargé n\'est pas conforme !';
$string['pluginadministration'] = 'Administration de MUMIE';
$string['pluginname'] = 'Activité MUMIE';
$string['server_config_missing'] = '<br><br>Nous n\'avons pas pu trouver de configuration pour le serveur MUMIE utilisé dans le cadre de cette activité MUMIE. Veuillez demander à votre administrateur d\'ajouter une configuration de serveur MUMIE pour le préfixe URL suivant:<br><br><b>{$a}</b>';
