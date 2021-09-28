<?php
$movies = [
    'Indiana Jones et le Royaume du crâne de cristal' => ['Cate Blanchett', 'Karen Allen', 'Shia LaBeouf'],
    
    'Indiana Jones et la Dernière Croisade' => ['Sean Connery', 'Alison Doody', 'Denholm Elliott'],
    
    'Indiana Jones et le temple maudit' => [ 'Philip Stone', 'Kate Capshaw', 'Ke Huy Quan']
];
    foreach($movies as $key => $movie){
        echo $key;

        foreach($movie as $actor) {
            echo $actor;
        }
    }
