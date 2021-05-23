
<?php
/*
 * 3. De functie calculateBitcoinAmount() is niet afgemaakt. Deze functie rekent uit hoeveel bitcoins er worden gekocht als er op 1 van de knoppen geklikt wordt. 
 *     Zie regel 36 van dit bestand
 * 4. Voeg de drie benodigde waardes toe aan de $transactions array met array_push() zodat de nieuwe gekochte stukje bitcoin wordt toegevoegd 
 */

/*******************************************************************************************************************/
/******************************************* OPDRACHT 2 doe je hieronder *******************************************/

/*  Opdracht 2: Zet hier de $buttons array neer  */

$buttons=[8,20.5,300];

// 
// 
/******************************************* OPDRACHT 2 doe je hierboven *******************************************/
/*******************************************************************************************************************/



/*******************************************************************************************************************/
/******************************************* OPDRACHT 3 doe je hieronder *******************************************/
/* 
 * Maak met behulp van de functie getBitcoinPrice() een berekening. 
 * De uitkomst van de berekening moet het aantal gekochte bitcoins opleveren.
 * De functie geeft de uitkomst van die berekening terug.
 * De gebruiker kan voor een vast bedrag bitcoins kopen. 
 */

function calculateBitcoinAmount()
{
    if (isset($_GET['euro'])) {
        $euro = (int)$_GET['euro']; //Dit blokje code (if-statement) kun je laten staan.
    }

    /************************************************************ Bijv. ***********************************************************************/
    /* Als de huidigeprijs van 1 hele bitcoin 5000,- kost en jij betaalt 1000,- euro. Dan krijg je 1/5 oftewel 0,2 bitcoin. 
     * Om dit te bereken moet je je koopbedrag delen door de huidigeprijs. Aantal gekochte bicoin = koopbedrag/huidigePrijs; = (1000/5000=0,2). 
    */

    $prijs = getBitcoinPrice();
    $bedrag =  $euro; 
    $aantalGekochteBicoin = $bedrag / $prijs; //This is the formule of the bitcoin that you get after you buy it for any amount of money. 

    return [$prijs,$bedrag,$aantalGekochteBicoin]; // The final result that will returned after calculation.

}
/******************************************* OPDRACHT 3 doe je hierboven *******************************************/
/*******************************************************************************************************************/



/*******************************************************************************************************************/
/******************************************* OPDRACHT 4 doe je hieronder *******************************************/

/* 
 * Deze array bevat alle eerder gemaakte transacties. 
 * De structuur van de array is als volgt: [ prijs 1 bitcoin, koopbedrag, aantal bitcoin gekocht]
 * Deze array laat je staan en verander je niet. Jij maakt gebruik van array_push()
 */

$transactions = [

    [4638.78, 200, 0.0431],
    [9750.61, 250, 0.0256],
    [6421.15, 450, 0.0701],
    [7276.93, 100, 0.0137],
    [8832.08, 100, 0.0113],
    [9418.41, 250, 0.0265],
    [9431.84, 250, 0.0265],
    [5211.67, 200, 0.0384]
];

if (isset($_GET['euro'])) {

    $euro = $_GET['euro']; //deze regel laten staan

    array_push($transactions,calculateBitcoinAmount()); /* This will push the funtion (calculator) to vabrible ($transactions), to add a extra row to the array. 
                if you push any amount of button on your screen to buy bitcoin, than wil the calculator calculate and wli returd amount of bitcoins that you buy. */
    
                //print_r($transactions);


    /* SCHRIJF HIER JE CODE.
     * Schrijf hieronder de code om de gekochte bitcoin aan de array $transactions toe te voegen.
     * Je voegt een bitcoinprijs toe, de prijs in euro's en het aantal gekochte bitcoins.
     */
}



/******************************************* OPDRACHT 4 doe je hierboven *******************************************/
/*******************************************************************************************************************/




/*******************************************************************************************************************/
/************************* De functies hieronder heb je nodig en hoef je niet aan te passen ************************/

// Deze functie geeft de laatste prijs van bitcoin in euro's terug
function getBitcoinPrice()
{

    $bitcoinData = getBitcoinData();

    $price = str_replace('#', ',', str_replace(',', '', $bitcoinData->bpi->EUR->rate));

    return number_format((float)$price, 2, '.', '');
}

// Deze functie geeft de vereiste Coindesk API disclaimer terug
function getDisclaimer()
{
    $bitcoinData = getBitcoinData();
    return $bitcoinData->disclaimer;
}

// Deze functie geeft de laatste timestamp van de bitcoin prijs terug
function getTime()
{
    $bitcoinData = getBitcoinData();
    return $bitcoinData->time->updateduk;
}


// Deze functie maakt gebruik van de Coindesk API. Met deze gratis API kun je de huidge Bitcoin prijs ophalen naar je applicatie
// Vereiste is wel dat je de naam van Coindesk noemt in je applicatie.
function getBitcoinData()
{

    // create curl resource
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, "https://api.coindesk.com/v1/bpi/currentprice.json");

    //return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    // close curl resource to free up system resources
    curl_close($ch);

    $bitcoinInstance = json_decode($output);

    return $bitcoinInstance;
}

/************************* De functies hierboven heb je nodig en hoef je niet aan te passen ************************/
/*******************************************************************************************************************/
