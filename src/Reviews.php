<?php
require_once 'SearchInterface.php';

class Reviews implements SearchInterface
{
    private $table = [
        [
            'Username' => 'Raja',
            'Email' => 'libero.et@Etiamlaoreet.com',
            'Phone' => '1-572-596-9034',
            'Address' => '945-7709 At, St.',
            'City' => 'Darlington',
            'Company' => 'Sociis Industries'
        ],
        [
            'Username' => 'Palmer',
            'Email' => 'et@nisiCumsociis.org',
            'Phone' => '1-954-150-4476',
            'Address' => 'Ap #162-3164 Quis St.',
            'City' => 'Stockport',
            'Company' => 'Sodales LLC'
        ],
        [
            'Username' => 'Dylan',
            'Email' => 'Nulla@ametmetus.edu',
            'Phone' => '1-519-358-2411',
            'Address' => '7466 Mauris Street',
            'City' => 'Woodstock',
            'Company' => 'Suspendisse Tristique Associates'
        ],
        [
            'Username' => 'Demetrius',
            'Email' => 'Vestibulum@blanditviverra.ca',
            'Phone' => '1-784-536-4886',
            'Address' => '1449 Dictum Av.',
            'City' => 'Keiem',
            'Company' => 'Quisque Tincidunt Pede Incorporated'
        ],
        [
            'Username' => 'Herrod',
            'Email' => 'vitae.sodales@tempusloremfringilla.co.uk',
            'Phone' => '1-819-836-0524',
            'Address' => 'P.O. Box 220, 7365 Nisi Rd.',
            'City' => 'Dunkerque',
            'Company' => 'Tempus Non Institute'
        ],
        [
            'Username' => 'Troy',
            'Email' => 'dolor.Fusce@sapienmolestie.ca',
            'Phone' => '1-636-150-5740',
            'Address' => 'P.O. Box 505, 4788 Amet, St.',
            'City' => 'Criciúma',
            'Company' => 'Turpis Nulla Institute'
        ],
        [
            'Username' => 'Honorato',
            'Email' => 'vel@et.org',
            'Phone' => '1-920-160-5273',
            'Address' => 'Ap #872-4303 Ornare, St.',
            'City' => 'Narbolia',
            'Company' => 'Adipiscing Enim Mi Foundation'
        ],
        [
            'Username' => 'Craig',
            'Email' => 'leo@luctussit.edu',
            'Phone' => '1-233-425-3638',
            'Address' => 'P.O. Box 533, 5945 Fusce Ave',
            'City' => 'Melton',
            'Company' => 'Cum Sociis Inc.'
        ],
        [
            'Username' => 'Brian',
            'Email' => 'Integer.aliquam@turpis.org',
            'Phone' => '1-987-198-2998',
            'Address' => '951-4691 Lacus Rd.',
            'City' => 'Dörtyol',
            'Company' => 'Egestas Sed Pharetra Corporation'
        ],
        [
            'Username' => 'Leroy',
            'Email' => 'lorem.ac@arcuNuncmauris.edu',
            'Phone' => '1-332-640-0956',
            'Address' => 'Ap #274-5834 Id, Rd.',
            'City' => 'Taltal',
            'Company' => 'Massa Quisque Porttitor Corporation'
        ],
        [
            'Username' => 'Tad',
            'Email' => 'gravida.Praesent@dolorFusce.net',
            'Phone' => '1-649-588-6358',
            'Address' => 'Ap #963-4277 Donec Avenue',
            'City' => 'Pedro Aguirre Cerda',
            'Company' => 'Sem PC'
        ],
        [
            'Username' => 'Bradley',
            'Email' => 'blandit@Nunc.co.uk',
            'Phone' => '1-240-700-4517',
            'Address' => '4665 Fermentum Rd.',
            'City' => 'Lapscheure',
            'Company' => 'Primis In Faucibus Institute'
        ],
        [
            'Username' => 'Stephen',
            'Email' => 'ipsum.primis@Curabitursed.ca',
            'Phone' => '1-851-152-3808',
            'Address' => '701-272 Faucibus St.',
            'City' => 'Khanpur',
            'Company' => 'Turpis Inc.'
        ],
        [
            'Username' => 'Declan',
            'Email' => 'non.justo.Proin@inceptoshymenaeosMauris.ca',
            'Phone' => '1-386-980-7651',
            'Address' => 'Ap #690-418 Erat Rd.',
            'City' => 'Bevagna',
            'Company' => 'Donec Nibh Quisque LLC'
        ],
        [
            'Username' => 'Berk',
            'Email' => 'Integer.urna@placerategetvenenatis.net',
            'Phone' => '1-744-552-7666',
            'Address' => 'P.O. Box 357, 135 Sapien. Street',
            'City' => 'Moerbeke',
            'Company' => 'Pede Nonummy Ut Limited'
        ],
        [
            'Username' => 'Phelan',
            'Email' => 'vulputate.velit.eu@nulla.org',
            'Phone' => '1-314-439-4516',
            'Address' => '339 Fusce Rd.',
            'City' => 'Beringen',
            'Company' => 'Aliquet Diam Sed Associates'
        ],
        [
            'Username' => 'Moses',
            'Email' => 'dignissim.Maecenas.ornare@turpis.com',
            'Phone' => '1-474-371-6332',
            'Address' => 'Ap #677-9808 Duis St.',
            'City' => 'Orp-le-Grand',
            'Company' => 'Tempor Diam Ltd'
        ],
        [
            'Username' => 'Philip',
            'Email' => 'vitae.posuere@Phasellusliberomauris.edu',
            'Phone' => '1-427-173-0630',
            'Address' => '7702 Mattis Rd.',
            'City' => 'Rae Bareli',
            'Company' => 'Diam LLP'
        ],
        [
            'Username' => 'Beau',
            'Email' => 'vitae.purus@elitelitfermentum.ca',
            'Phone' => '1-813-115-5633',
            'Address' => '414-8082 Luctus St.',
            'City' => 'Huppaye',
            'Company' => 'Molestie Consulting'
        ],
        [
            'Username' => 'Sawyer',
            'Email' => 'et@a.com',
            'Phone' => '1-200-593-1516',
            'Address' => 'P.O. Box 537, 6273 Sed Ave',
            'City' => 'Tavier',
            'Company' => 'Luctus Associates'
        ],
        [
            'Username' => 'Allistair',
            'Email' => 'ullamcorper@Duis.org',
            'Phone' => '1-695-585-9731',
            'Address' => 'Ap #271-1567 Duis Avenue',
            'City' => 'North Vancouver',
            'Company' => 'Libero Est Consulting'
        ],
        [
            'Username' => 'Malcolm',
            'Email' => 'Phasellus.ornare.Fusce@dignissimMaecenasornare.edu',
            'Phone' => '1-682-799-0379',
            'Address' => 'P.O. Box 127, 9046 Mus. Ave',
            'City' => 'Asti',
            'Company' => 'Dui Nec Foundation'
        ],
        [
            'Username' => 'Hilel',
            'Email' => 'cursus.in@montesnascetur.com',
            'Phone' => '1-648-737-0095',
            'Address' => 'P.O. Box 394, 5509 Cras St.',
            'City' => 'Bo‘lhe',
            'Company' => 'Pellentesque Habitant Morbi Incorporated'
        ],
        [
            'Username' => 'Fulton',
            'Email' => 'Sed.neque@laoreet.ca',
            'Phone' => '1-189-546-9771',
            'Address' => 'P.O. Box 638, 3454 Vitae Av.',
            'City' => 'Perinaldo',
            'Company' => 'Cras Foundation'
        ],
        [
            'Username' => 'Abraham',
            'Email' => 'sollicitudin.orci@tinciduntduiaugue.org',
            'Phone' => '1-604-396-8651',
            'Address' => '171-9044 Vitae Av.',
            'City' => 'Smetlede',
            'Company' => 'Felis Limited'
        ]];

    public function __construct()
    {
    }

    public function search($word)
    {

        $result = [];
        // do some search

        foreach ($this->table as $record){
            foreach ($record as $key=>$value){
                if(strstr($value , $word)){
                    $result[] = $record;
                }
            }
        }

        return $result;
    }
}