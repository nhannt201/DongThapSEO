<?php
$string = array("a","able","about","above","abst","accordance","according","accordingly","across","act","actually","added","adj","affected","affecting","affects","after","afterwards","again","against","ah","all","almost","alone","along","already","also","although","always","am","among","amongst","an","and","announce","another","any","anybody","anyhow","anymore","anyone","anything","anyway","anyways","anywhere","apparently","approximately","are","aren","arent","arise","around","as","aside","ask","asking","at","auth","available","away","awfully","b","back","be","became","because","become","becomes","becoming","been","before","beforehand","begin","beginning","beginnings","begins","behind","being","believe","below","beside","besides","best","between","beyond","biol","both","brief","briefly","but","by","c","ca","came","can","cannot","canot","cause","causes","certain","certainly","co","com","come","comes","contain","containing","contains","could","couldnt","d","date","did","didnot","different","do","does","doesnot","doing","done","donot","down","downwards","due","during","e","each","ed","edu","effect","eg","eight","eighty","either","else","elsewhere","end","ending","enough","especially","et","etal","etc","even","ever","every","everybody","everyone","everything","everywhere","ex","except","f","far","few","ff","fifth","first","five","fix","followed","following","follows","for","former","formerly","forth","found","four","from","further","furthermore","g","gave","get","gets","getting","give","given","gives","giving","go","goes","gone","got","gotten","h","had","happens","hardly","has","hasnot","have","havenot","having","he","hed","hence","her","here","hereafter","hereby","herein","heres","hereupon","hers","herself","hes","hi","hid","him","himself","his","hither","home","how","howbeit","however","hundred","i","id","ie","if","iwill","im","immediate","immediately","importance","important","in","inc","indeed","index","information","instead","into","invention","inward","is","isnot","it","itd","itwill","its","itself","ilive","j","just","k","keep","keeps","kept","kg","km","know","known","knows","l","largely","last","lately","later","latter","latterly","least","less","lest","let","lets","like","liked","likely","line","little","will","look","looking","looks","ltd","m","made","mainly","make","makes","many","may","maybe","me","mean","means","meantime","meanwhile","merely","mg","might","million","miss","ml","more","moreover","most","mostly","mr","mrs","much","mug","must","my","myself","n","na","name","namely","nay","nd","near","nearly","necessarily","necessary","need","needs","neither","never","nevertheless","new","next","nine","ninety","no","nobody","non","none","nonetheless","noone","nor","normally","nos","not","noted","nothing","now","nowhere","o","obtain","obtained","obviously","of","off","often","oh","ok","okay","old","omitted","on","once","one","ones","only","onto","or","ord","other","others","otherwise","ought","our","ours","ourselves","out","outside","over","overall","owing","own","p","page","pages","part","particular","particularly","past","per","perhaps","placed","please","plus","poorly","possible","possibly","potentially","pp","predominantly","present","previously","primarily","probably","promptly","proud","provides","put","q","que","quickly","quite","qv","r","ran","rather","rd","re","readily","really","recent","recently","ref","refs","regarding","regardless","regards","related","relatively","research","respectively","resulted","resulting","results","right","run","s","said","same","saw","say","saying","says","sec","section","see","seeing","seem","seemed","seeming","seems","seen","self","selves","sent","seven","several","shall","she","shed","shewill","shes","should","shouldnot","show","showed","shown","showns","shows","significant","significantly","similar","similarly","since","six","slightly","so","some","somebody","somehow","someone","somethan","something","sometime","sometimes","somewhat","somewhere","soon","sorry","specifically","specified","specify","specifying","still","stop","strongly","sub","substantially","successfully","such","sufficiently","suggest","sup","sure","t","take","taken","taking","tell","tends","th","than","thank","thanks","thanx","that","thatwill","thats","thatlive","the","their","theirs","them","themselves","then","thence","there","thereafter","thereby","thered","therefore","therein","therewill","thereof","therere","theres","thereto","thereupon","therelive","these","they","theyd","theywill","theyre","theylive","think","thing","this","those","thou","though","thoughh","thousand","throug","through","throughout","thru","thus","til","tip","to","together","too","took","toward","towards","tried","tries","truly","try","trying","ts","twice","two","u","un","under","unfortunately","unless","unlike","unlikely","until","unto","up","upon","ups","us","use","used","useful","usefully","usefulness","uses","using","usually","v","value","various","'ve","very","via","viz","vol","vols","vs","w","want","wants","was","wasnt","way","we","wed","welcome","wewill","went","were","werent","welive","what","whatever","whatwill","whats","when","whence","whenever","where","whereafter","whereas","whereby","wherein","wheres","whereupon","wherever","whether","which","while","whim","whither","who","whod","whoever","whole","whowill","whom","whomever","whos","whose","why","widely","will","willing","wish","with","within","without","wont","words","world","would","wouldnt","www","x","y","yes","yet","you","youd","you'll","your","youre","yours","yourself","yourselves","youlive","z","zero");

$so = array("","0","1","2","3","4","5","6","7","8","9");
$randso = rand(0,10);
$soint = $so[$randso];
$rand = rand(0,600);
$abcc = $string[$rand];
$rand2 = rand(0,600);
$abccc = $string[$rand2];
if ($abcc  == "") {
$rand = rand(0,600);
$abcc = $string[$rand];
$randso = rand(0,10);
$soint = $so[$randso];
} elseif ($abccc  == "") {
$rand2 = rand(0,600);
$abccc = $string[$rand2];
$randso = rand(0,10);
$soint = $so[$randso];
} 
$ngaunhien = rand(0, 11);
if ($ngaunhien == 1) {
$tenmien = ".com";
} elseif ($ngaunhien == 2) {
$tenmien = ".net";
}elseif ($ngaunhien == 3) {
$tenmien = ".info";
} elseif ($ngaunhien == 4) {
$tenmien = ".xyz";
} elseif ($ngaunhien == 5) {
$tenmien = ".tk";
}elseif ($ngaunhien == 6) {
$tenmien = ".org";
} elseif ($ngaunhien == 7) {
$tenmien = ".biz";
} elseif ($ngaunhien == 8) {
$tenmien = ".tv";
} elseif ($ngaunhien == 9) {
$tenmien = ".vn";
} elseif ($ngaunhien == 10) {
$tenmien = ".us";
} elseif ($ngaunhien == 11) {
$tenmien = ".vn";
} else {
$tenmien = ".com";
}
$url ="https://dongthapseo.com/set.php?u=http://".$abcc."".$abccc."".$soint."".$tenmien;
echo $url;
$url2 ="https://dongthapseo.com/set.php?u=http://".$abcc."".$abccc."".$tenmien;
echo $url2;
echo '<script type="text/javascript">   window.open("'.$url.'", "_blank"); </script>';
echo '<script type="text/javascript">   window.open("'.$url2.'", "_blank"); </script>';

$delay=3; 
header("Refresh: $delay;"); 
?>