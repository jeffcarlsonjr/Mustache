<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Mustache Sample PHP Version</title>
        <style>
            nav{
                width: 100%;
                height: 40px;
                float: left;                
            }
            nav ul{
                list-style: none;
                margin: 0px;
                padding: 0px;
            }
            nav ul li{
                float: left;
                font-size: 22px;
                margin-right: 20px;
            }
            nav ul li a{
                text-decoration: none;
            }
            nav ul li a:hover{
                text-decoration: underline;
            }
        </style>
</head>
<body style="width: 980px; margin: 0px auto">
    <nav>
        <ul>
            <li>
                <a href="index.html">JSON</a>
            </li>
            <li>
                <a href="samplePHP.php">PHP</a>
            </li>
           
        </ul>
    </nav>
    <br/><br/>
    <p>This version is made with a PHP array.</p>
	<h2>Speakers Bio</h2>
	<dl id="talktitles">
        </dl>
 
<?php

require './Mustache/Autoloader.php';
Mustache_Autoloader::register();


$template = '{{#speakers}}
                <dt><h2>{{name}}</h2></dt>
                <dd><b>Short Name: </b>{{shortname}}</dd>
                <dd><b>Organization: </b>{{reknown}}</dd>
                <dd><b>Bio: </b>{{bio}}</dd>
                <hr align="center" width="60%">
            {{/speakers}}';

$array = array(
    'speakers' => array(
        array(
            'name'=>'Jonathan G. Ferrar II',
           'shortname'=> 'Jonathan_Ferrar',
            'reknown' => 'Artist to Watch in 2012',
            'bio' => "The Artist to Watch in 2012 by the London Review, Johnathan has already sold one of the highest priced-commissions paid to an art student, ever on record. The piece, entitled Gratitude Resort, a work in oil and mixed media, was sold for $750,000 and Jonathan donated all the proceeds to Art for Peace, an organization that provides college art scholarships for creative children in developing nations"
       ),
        array(
            'name'=>'Mr Bellingham',
           'shortname'=> 'Barot_Bellingham',
            'reknown' => 'Royal Academy of Painting and Sculpture',
            'bio' => "Barot has just finished his final year at The Royal Academy of Painting and Sculpture, where he excelled in glass etching paintings and portraiture. Hailed as one of the most diverse artists of his generation, Barot is equally as skilled with watercolors as he is with oils, and is just as well-balanced in different subject areas. Barot's collection entitled 'The Un-Collection' will adorn the walls of Gilbert Hall, depicting his range of skills and sensibilities - all of them, uniquely Barot, yet undeniably different"
       ),
        array(
            'name'=>'Hillary Hewitt Goldwynn-Post',
           'shortname'=> 'Hillary_Goldwynn',
            'reknown' => 'New York University',
            'bio' => "Hillary is a sophomore art sculpture student at New York University, and has already won all the major international prizes for new sculptors, including the Divinity Circle, the International Sculptor's Medal, and the Academy of Paris Award. Hillary's CAC exhibit features 25 abstract watercolor paintings that contain only water images including waves, deep sea, and river."
       ),
        array(
            'name'=>'LaVonne L. LaRue',
           'shortname'=> 'LaVonne_LaRue',
            'reknown' => 'Chicago, IL',
            'bio' => "Constance received the Fullerton-Brighton-Norwell Award for Modern Art for her mixed-media image of a tree of life, with jewel-adorned branches depicting the arms of humanity, and precious gemstone-decorated leaves representing the spouting buds of togetherness. The daughter of a New York jeweler, Constance has been salvaging the discarded remnants of her father's jewelry-making since she was five years old, and won the New York State Fair grand prize at the age of 8 years old for a gem-adorned painting of the Manhattan Bridge."
       ),
        
        )
);


//start the mustache engine
$m = new Mustache_Engine;



//render the template with the set values
echo $m->render($template, $array);

?>

        </body>
</html>