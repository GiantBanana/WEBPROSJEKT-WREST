<?php

$lang = 'en';
$dev = True;
$side = 'home';

$homeLinks = array(
    "en" => "../USER-ENGLISH/WREST-MAIN-HOME.html",
    "no" => "../USER-NORWEGIAN/WREST-HOME-NO.html",
    "ny" => "../USER-NYNORSK/WREST-HOME-NY.html",
);

$aboutLinks = array(
    "en" => "../USER-ENGLISH/WREST-MAIN - ABOUT.html",
    "no" => "../USER-NORWEGIAN/WREST-ABOUT-NO.html",
    "ny" => "../USER-NYNORSK/WREST-ABOUT-NY.html",
    );

$devLinks = array(
    "en" => "../DEVELOPER-ENGLISH/WREST-DEVELOPER.html",
    "no" => "../DEVELOPER-NORWEGIAN/WREST-DEVELOPER-NO.html",
    "ny" => "../DEVELOPER-NYNORSK/WREST-DEVELOPER-NY.html",
    );

$downloadLinks = array(
  "en" => "../USER-ENGLISH/WREST-MAIN - DOWNLOAD.html",
  "no" => "../USER-NORWEGIAN/WREST-DOWNLOAD-NO.html",
  "ny" => "../USER-NYNORSK/WREST-DOWNLOAD-NY.html",
);

$devDocLinks = array(
  "en" => "../DEVELOPER-ENGLISH/WREST-DEVELOPER.html",
  "no" => "../DEVELOPER-NORWEGIAN/WREST-DEVELOPER-NO.html",
  "ny" => "../DEVELOPER-NYNORSK/WREST-DEVELOPER-NY.html",
);

$devGitLinks = array(
  "en" => "../DEVELOPER-ENGLISH/WREST-DEVELOPER.html",
  "no" => "../DEVELOPER-NORWEGIAN/WREST-DEVELOPER-NO.html",
  "ny" => "../DEVELOPER-NYNORSK/WREST-DEVELOPER-NY.html",
);

$linksRootFolders = array(
  "en" => "../USER-ENGLISH/",
  "no" => "../USER-NORWEGIAN/",
  "ny" => "../USER-NYNORSK/",
);

$linkUncomplete = array(
  "en" => "../TOBECOMPLETED/EN.html",
  "no" => "../TOBECOMPLETED/NO.html",
  "ny" => "../TOBECOMPLETED/NY.html",
);

$devDocWords = array(
  "en" => "Documentation",
  "no" => "Dokumentasjon",
  "ny" => "Dokumantasjon",
);

$devGitWords = array(
  "en" => "SourceCode",
  "no" => "KildeKode",
  "ny" => "KjeldeKode",
);

$homeWords = array(
  "en" => "Home",
  "no" => "Hjem",
  "ny" => "Heim",
);

$aboutWords = array(
  "en" => "About",
  "no" => "Om wREST",
  "ny" => "Om wREST",
);

$downloadWords = array(
  "en" => "Download",
  "no" => "Nedlastinger",
  "ny" => "Nedlastingar",
);

$userWords = array(
  "en" => "User",
  "no" => "Bruker",
  "ny" => "Brukar",
);

$developerWords = array(
  "en" => "Developer",
  "no" => "Utvikler",
  "ny" => "Utviklar",
);

$titles = array(
    "en" => "Wrest Wcag Requst Standard | EN | ",
    "no" => "Wrest Wcag Requst Standard | NO | ",
    "ny" => "Wrest Wcag Requst Standard | NY | ",
    );

$skipToContentWords = array(
  "en" => "Skip to Content",
  "no" => "Hopp til hovedinnhold",
  "ny" => "Hopp til hovedinhald",

);

function getTitle(){
    echo $GLOBALS['titles'][$GLOBALS['lang']];
}

function getCurrentPageInLang($newlang){
    switch($GLOBALS['side']){
        case "home":
            return $GLOBALS['homeLinks'][$newlang];
            break;
        case "about":
            return $GLOBALS['aboutLinks'][$newlang];
            break;
        case "download":
            return $GLOBALS['downloadLinks'][$newlang];
            break;
        case "dev":
            return $GLOBALS['devLinks'][$newlang];
            break;
    }
}

function getImports(){
    ?>
    <meta charset="utf-8">
    <meta name="HTML Start Template" content="A Start Out Template for HTML Files">
    <link href="../../CSS/WREST-MAIN-CSS.css" rel="stylesheet" type="text/css" />
    <?php
    // If the dev variable is set also load the dev css
    //if($GLOBALS['dev']){
        echo '<link href="../../CSS/WREST-DEVELOPER-CSS.css" rel="stylesheet" type="text/css" />';
    //}
    ?>
    <script src="../../JS/main_script.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- This makes it possible to use the CSS units
    50 vw       | % of vertical viewport
    50 vh       | % of horizontal viewport
    60 vmin     | % of min vertical viewport
    60 vmax     | % of max vertical viewport
    -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/png" href="../../Images/Logos/WREST_LOGO_LARGE.png"/>
        <?php
}

function setLang($newlang){
    $GLOBALS['lang'];
}

function getHeader(){?>
            <div id="skip-link">
                <a tabindex="1" href="#content">
                    <?php echo $GLOBALS['skipToContentWords'][$GLOBALS['lang']];?>
                </a>
            </div>
            <div class="bodycontainer">
                <div class="bannercontainer">
                    <img src="../../Images/Logos/WREST_LOGO_LARGE.png" role="banner" alt="WREST company logo." />
                </div>
                <div class="languagenav">
                    <nav role="navigation" tabindex="-1">
                        <ul >
                          <li><a id="descreaseFont" onClick="descreaseFont()" href="#" style="font-weight:900; font-size:1.1rem; color:black"><!-- Here a plus/minus symbol will be added by javascript--></a></li>
                          <li style="position:relative;top:0.35rem;">
                            <span class="aSymbol" style="font-size: 0.5rem;"></span>
                            <span class="aSymbol" style="font-size: 1rem;"></span>
                            <span class="aSymbol" style="font-size: 1.5rem;"></span>
                          </li>
                          <li><a id="increaseFont" onClick="increaseFont()" href="#" style="font-weight:900; font-size:1.1rem; color:black"><!-- Here a plus/minus symbol will be added by javascript--></a></li>

                            <li>
                                <a href="

    <?php
    echo getCurrentPageInLang('no');
    ?>
    " <?php if($GLOBALS[ 'lang']==='no' ){echo 'class="selectedLang"';} ?>>
                                        <img src="../../Images/Icons/NO.png" alt="Trykk her for norsk" />Norsk</a>
                            </li>
                            <li>
                                <a href="
    <?php
    echo getCurrentPageInLang('ny');
    ?>
    " <?php if($GLOBALS[ 'lang']==='ny' ){echo 'class="selectedLang"';} ?>><img src="../../Images/Icons/NO.png" alt="Trykk her for nynorsk" />Nynorsk</a>
                            </li>
                            <li>
                                <a href="
    <?php
    echo getCurrentPageInLang('en');
    ?>

    " <?php if($GLOBALS[ 'lang']==='en' ){echo 'class="selectedLang"';} ?>><img src="../../Images/Icons/GB.png" alt="Click here for English" />English</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="developertab">
                    <nav role="navigation">
                        <ul>
                            <?php
     if($GLOBALS['dev']){
        echo '<li><a href="' . $GLOBALS['homeLinks'][$GLOBALS['lang']] . '" id="developertabactive">' . $GLOBALS['userWords'][$GLOBALS['lang']] . '</a></li
        ><li><a href="' . $GLOBALS['devLinks'][$GLOBALS['lang']] . '" id="notactive">' . $GLOBALS['developerWords'][$GLOBALS['lang']] . '</a></li>';
        }  else {
            echo '<li><a href="' . $GLOBALS['homeLinks'][$GLOBALS['lang']] . '" id="notactive">' . $GLOBALS['userWords'][$GLOBALS['lang']] . '</a></li
        ><li><a href="' . $GLOBALS['devLinks'][$GLOBALS['lang']] . '" id="developertabactive">' . $GLOBALS['developerWords'][$GLOBALS['lang']] . '</a></li>';
        }
    ?>
                        </ul>
                    </nav>
                </div>
                <div class="mainnavcontainer">
                    <nav role="navigation">
                        <ul>
                            <!--
            Fixed the invi margin between li element by doing the
            <li> element</li
            >

            Its a fucked up thing
            Sauce: https://css-tricks.com/fighting-the-space-between-inline-block-elements/
            -->
            <?php
              if($GLOBALS['dev']){
                ?>
                <li>
                    <a href="<?php $GLOBALS['devDocLinks'][$GLOBALS['lang']];?>">
                        <?php echo $GLOBALS['devDocWords'][$GLOBALS['lang']]; ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $GLOBALS['linkUncomplete'][$GLOBALS['lang']]; ?>">
                        <?php echo $GLOBALS['devGitWords'][$GLOBALS['lang']]; ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $GLOBALS['downloadLinks'][$GLOBALS['lang']]; ?>">
                        <?php echo $GLOBALS['downloadWords'][$GLOBALS['lang']]; ?>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
            <?php
              }
              else{?>
                            <li>
                                <a
                                <?php if($GLOBALS['side'] == "home"){
                                ?>class="currentPage"<?php }?>
                                 href="<?php $GLOBALS['homeLinks'][$GLOBALS['lang']];?>">
                                    <?php echo $GLOBALS['homeWords'][$GLOBALS['lang']]; ?>
                                </a>
                            </li>
                            <li>
                                <a <?php if($GLOBALS['side'] == "about"){
                                ?>class="currentPage"<?php }?>
                                href="<?php echo $GLOBALS['aboutLinks'][$GLOBALS['lang']]; ?>">
                                    <?php echo $GLOBALS['aboutWords'][$GLOBALS['lang']]; ?>
                                </a>
                            </li>
                            <li>
                                <a <?php if($GLOBALS['side'] == "download"){
                                ?>class="currentPage"<?php }?>
                                href="<?php echo $GLOBALS['downloadLinks'][$GLOBALS['lang']]; ?>">
                                    <?php echo $GLOBALS['downloadWords'][$GLOBALS['lang']]; ?>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <?php }?>
                <div class="mainsectioncontainer">
                    <section role="main" id="content">
                        <?php
}

function getFooter(){
    if($GLOBALS['lang'] == 'no'){?>
                    </section>
                </div>
                <div class="footercontainer">
                    <footer>
                        <div class="infocontainer">
                            <h3>Presets</h3>
                            <ul>
                                <li><a>FargeblindA</a></li>
                                <li><a>FargeblindB</a></li>
                                <li><a>Dysleksi</a></li>
                            </ul>
                        </div>
                        <div class="infocontainer">
                            <h3>Brukerstøtte</h3>
                            <ul>
                                <li><a>Installasjonshjelp</a></li>
                                <li><a>Rådgivning</a></li>
                                <li><a>Profilering</a></li>
                            </ul>
                        </div>
                        <div class="infocontainer">
                            <h3>Kontakt</h3>
                            <ul>
                                <li><a>Tlf: 123 44 567</a></li>
                                <li><a>Epost: faq@wrest.com</a></li>
                                <li><a>Wrest Road</a></li>
                                <li><a>0000 Oslo</a></li>
                            </ul>
                        </div>
                    </footer>
                </div>
            </div>
            <?php
          }else if($GLOBALS['lang'] == 'en'){
            ?>
                </section>
                </div>
                <div class="footercontainer">
                    <footer>
                        <div class="infocontainer">
                            <h3>Presets</h3>
                            <ul>
                                <li><a>Colorblind A</a></li>
                                <li><a>Colorblind B</a></li>
                                <li><a>Dysleksi</a></li>
                            </ul>
                        </div>
                        <div class="infocontainer">
                            <h3>User Support</h3>
                            <ul>
                                <li><a>Installation help</a></li>
                                <li><a>Consulting</a></li>
                                <li><a>Profiling</a></li>
                            </ul>
                        </div>
                        <div class="infocontainer">
                            <h3>Contact</h3>
                            <ul>
                                <li><a>Tlf: 123 44 567</a></li>
                                <li><a>Epost: faq@wrest.com</a></li>
                                <li><a>Wrest Road</a></li>
                                <li><a>0000 Oslo</a></li>
                            </ul>
                        </div>
                    </footer>
                </div>
                </div>

                <?php
          }else if($GLOBALS['lang'] == 'ny'){
            ?>
                    </section>
                    </div>
                    <div class="footercontainer">
                        <footer>
                            <div class="infocontainer">
                                <h3>Presets</h3>
                                <ul>
                                    <li><a>FargeblindA</a></li>
                                    <li><a>FargeblindB</a></li>
                                    <li><a>Dysleksi</a></li>
                                </ul>
                            </div>
                            <div class="infocontainer">
                                <h3>Brukarstøtte</h3>
                                <ul>
                                    <li><a>Installasjonshjelp</a></li>
                                    <li><a>Rådgivning</a></li>
                                    <li><a>Profilering</a></li>
                                </ul>
                            </div>
                            <div class="infocontainer">
                                <h3>Kontakt</h3>
                                <ul>
                                    <li><a>Tlf: 123 44 567</a></li>
                                    <li><a>Epost: faq@wrest.com</a></li>
                                    <li><a>Wrest Road</a></li>
                                    <li><a>0000 Oslo</a></li>
                                </ul>
                            </div>
                        </footer>
                    </div>
                    </div>
                    <?php
          }
}
?>
