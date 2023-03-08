<?php ob_start(); ?>
    <h1 class="titles">Conditions générales de vente</h1>

    <p>Article 1 : Ce contrat est destiné à l'usage exclusif de la réservation de séjours en chambres d'hôtes agréées par l'antenne départementale ou interdépartementale territorialement compétente au nom de la Fédération Nationale des Gîtes de France.
En aucun cas la Fédération Nationale des Gîtes de France ne saurait voir sa responsabilité engagée en cas d'utilisation de ses contrats par des tiers ou à des fins non touristiques.

Le meilleur accueil sera réservé aux hôtes. Le propriétaire s'engage à assurer personnellement leur l'accueil avec toutes les attentions souhaitables permettant de faciliter leur séjour et la connaissance de la région.</p>


<p>Article 2 - durée du séjour : Le client signataire du présent contrat conclu pour une durée déterminée ne pourra en aucune circonstance se prévaloir d'un quelconque droit au maintien dans les lieux.</p>

<p> Article 3 - conclusion du contrat : La réservation devient effective dès lors que le client aura fait parvenir au propriétaire un acompte de 25 % du montant total du prix du séjour avec un minimum d'une nuitée par chambre retenue et un exemplaire du contrat signé avant la date indiquée au recto. Le deuxième exemplaire du contrat est à conserver par le client. Les prix s'entendent toutes charges comprises suivant la fiche descriptive, hors taxe de séjour.</p>

<p>Article 4 - absence de rétractation : Pour les réservations effectuées par courrier, par téléphone ou par internet, le locataire ne bénéficie pas du délai de rétractation, et ce conformément à l’article L121-21-8 du code de la consommation relatif notamment aux prestations de services d’hébergement fournies à une date ou selon une périodicité déterminée.</p>

<p>Article 5 - annulation par le client : Toute annulation doit être notifiée par lettre, ou télécopie adressée au propriétaire.</p>
<ul>
<li> Annulation avant le début du séjour : si l'annulation intervient plus de 24 heures avant le début du séjour, l'acompte reste acquis au propriétaire.
Si l'annulation intervient moins de 24 heures avant le début de séjour, l'acompte reste acquis au propriétaire qui demandera en outre le paiement du solde du prix du séjour.</li>
<li> Si le client ne se manisfeste pas avant 19 heures le jour prévu de début du séjour, le présent contrat devient nul et le propriétaire peut disposer de ses chambres d'hôtes. L'acompte reste acquis au propriétaire qui se réserve le droit de réclamer le solde du prix du séjour.</li>
<li> En cas de séjour écourté, le prix correspondant au séjour initial reste intégralement acquis au propriétaire.
   Les prestations supplémentaires non consommées seront remboursées.</li>
</ul>


<p>Article 6 - annulation par le propriétaire : Lorsqu'avant le début du séjour, le propriétaire annule ce séjour, il doit informer le client par lettre recommandée avec avis de réception.
Le client, sans préjuger des recours en réparation des dommages éventuellement subis, sera remboursé immédiatement des sommes versées. Il recevra en outre une indemnité au moins égale à la pénalité qu'il aurait supportée si l'annulation était intervenue de son fait à cette date.</p>


<?php
$content = ob_get_clean();
$titre = "Page d'accueil";
require "views/commons/template.php"; ?>