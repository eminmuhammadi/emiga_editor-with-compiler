<?php
ini_set("display_errors",0); 
  if(!empty($_GET['lang']))  {

      $lang=$_GET['lang'];
      $welcome="Developed by Emin Muhammadi";


      //[/////////////////////////////////]//
      if($lang=="c") {
      $lang_name="C";
      $mode="text/x-csrc";
      $text="//".$welcome;
      $lang_js="<script src=\"langs/clike.js\"></script>";
      $option=   
           "<option value=\"4\" mode=\"text/x-csrc\">C (gcc 7.2.0)</option>
            <option value=\"5\" mode=\"text/x-csrc\">C (gcc 6.4.0)</option>
            <option value=\"6\" mode=\"text/x-csrc\">C (gcc 6.3.0)</option>
            <option value=\"7\" mode=\"text/x-csrc\">C (gcc 5.4.0)</option>
            <option value=\"8\" mode=\"text/x-csrc\">C (gcc 4.9.4)</option>
            <option value=\"9\" mode=\"text/x-csrc\">C (gcc 4.8.5)</option>";
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
      else if($lang=="cpp") {
      $lang_name="C++";
      $mode="text/x-c++src";
      $text="//".$welcome;
      $lang_js="<script src=\"langs/clike.js\"></script>";
      $option=   
           "<option value=\"10\" mode=\"text/x-c++src\">C++ (g++ 7.2.0)</option>
            <option value=\"11\" mode=\"text/x-c++src\">C++ (g++ 6.4.0)</option>
            <option value=\"12\" mode=\"text/x-c++src\">C++ (g++ 6.3.0)</option>
            <option value=\"13\" mode=\"text/x-c++src\">C++ (g++ 5.4.0)</option>
            <option value=\"14\" mode=\"text/x-c++src\">C++ (g++ 4.9.4)</option>
            <option value=\"15\" mode=\"text/x-c++src\">C++ (g++ 4.8.5)</option>";
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
      else if($lang=="java") {
      $lang_name="JAVA";
      $mode="text/x-java";
      $text="//".$welcome;
      $lang_js="<script src=\"langs/clike.js\"></script>";
      $option=   
           "<option value=\"26\" mode=\"text/x-java\">Java (OpenJDK 9 with Eclipse OpenJ9)</option>
            <option value=\"27\" mode=\"text/x-java\">Java (OpenJDK 8)</option>
            <option value=\"28\" mode=\"text/x-java\">Java (OpenJDK 7)</option>";
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
      else if($lang=="csharp") {
      $lang_name="C#";
      $mode="text/x-csharp";
      $text="//".$welcome;
      $lang_js="<script src=\"langs/clike.js\"></script>";
      $option=   
           "<option value=\"16\" mode=\"text/x-csharp\">C# (mono 5.4.0.167)</option>
            <option value=\"17\" mode=\"text/x-csharp\">C# (mono 5.2.0.224)</option>" ;     
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
      else if($lang=="clojure") {
      $lang_name="CLOJURE";
      $mode="clojure";
      $text=";;".$welcome;
      $lang_js="<script src=\"langs/clojure.js\"></script>";
      $option=   
           "<option value=\"18\" mode=\"text/x-clojure\">Clojure (1.8.0)</option>";         
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
      else if($lang=="crystal") {
      $lang_name="CRYSTAL";
      $mode="crystal";
      $text="# - ".$welcome;
      $lang_js="<script src=\"langs/crystal.js\"></script>";
      $option=   
           "<option value=\"19\" mode=\"text/x-crystal\">Crystal (0.23.1)</option>";         
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
      else if($lang=="erlang") {
      $lang_name="ERLANG";
      $mode="erlang";
      $text="%% -*- ".$welcome."-*-";
      $lang_js="<script src=\"langs/erlang.js\"></script>";
      $option=   
           "<option value=\"21\" mode=\"text/x-erlang\">Erlang (OTP 20.0)</option>" ;       
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
      else if($lang=="go") {
      $lang_name="GO";
      $mode="go";
      $text=' // '.$welcome."";
      $lang_js="<script src=\"langs/go.js\"></script>";
      $option=   
           "<option value=\"22\" mode=\"text/x-go\">Go (1.9)</option>" ;        
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      } 
      else if($lang=="haskell") {
      $lang_name="HASKELL";
      $mode="haskell";
      $text='-- '.$welcome."";
      $lang_js="<script src=\"langs/haskell.js\"></script>";
      $option=   
           "<option value=\"23\" mode=\"text/x-haskell\">Haskell (ghc 8.2.1)</option>
            <option value=\"24\" mode=\"text/x-haskell\">Haskell (ghc 8.0.2)</option>"; 
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }   
      else if($lang=="javascript") {
      $lang_name="JAVASCRIPT";
      $mode="javascript";
      $text='// '.$welcome."";
      $lang_js="<script src=\"langs/javascript.js\"></script>";
      $option=   
           "<option value=\"29\" mode=\"text/javascript\">JavaScript (nodejs 8.5.0)</option>
            <option value=\"30\" mode=\"text/javascript\">JavaScript (nodejs 7.10.1)</option>";      
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }  
      else if($lang=="octave") {
      $lang_name="OCTAVE";
      $mode="octave";
      $text='%'.$welcome."";
      $lang_js="<script src=\"langs/octave.js\"></script>";
      $option=   
           "<option value=\"32\" mode=\"text/x-octave\">Octave (4.2.0)</option>" ;       
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php');
      }                                                                                                              
      else if($lang=="pascal") {
      $lang_name="PASCAL";
      $mode="pascal";
      $text='//'.$welcome."";
      $lang_js="<script src=\"langs/pascal.js\"></script>";
      $option=   
           "<option value=\"33\" mode=\"text/x-pascal\">Pascal (fpc 3.0.0)</option>" ;        
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
      else if($lang=="python") {
      $lang_name="PYTHON";
      $mode="python";
      $text='# '.$welcome."";
      $lang_js="<script src=\"langs/python.js\"></script>";
      $option=   
           "<option value=\"34\" mode=\"text/x-python\">Python (3.6.0)</option>
            <option value=\"35\" mode=\"text/x-python\">Python (3.5.3)</option>
            <option value=\"36\" mode=\"text/x-python\">Python (2.7.9)</option>
            <option value=\"37\" mode=\"text/x-python\">Python (2.6.9)</option>";            
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
      else if($lang=="ruby") {
      $lang_name="RUBY";
      $mode="ruby";
      $text='# '.$welcome."";
      $lang_js="<script src=\"langs/ruby.js\"></script>";
      $option=   
           "<option value=\"38\" mode=\"text/x-ruby\">Ruby (2.4.0)</option>
            <option value=\"39\" mode=\"text/x-ruby\">Ruby (2.3.3)</option>
            <option value=\"40\" mode=\text/x-ruby\">Ruby (2.2.6)</option>
            <option value=\"41\" mode=\"text/x-ruby\">Ruby (2.1.9)</option>"; 
      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/editor.php'); 
      }
    
      
      else {

      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/404.php');      

      }

      //[/////////////////////////////////]//

  } 


  else {

      require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/landing.php');

      }

?>
