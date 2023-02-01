@component('mail::message')


Conakry le : {{date('Y-m-d')}}


Suite à votre inscription effectuée sur notre site nous vous communiquons
votre identifiant.

Identifiant : {{$nom}}

Nous vous remercions de la confiance que vous nous accordez.

Cordialement.
@endcomponent