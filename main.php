<?php

require "./LanguageList.php";

$language_list = language_list("clojure", "php");

$language_list = add_to_language_list($language_list, "java");

$language_list = prune_language_list($language_list);

$first = current_language($language_list);

var_dump($language_list, $first, language_list_length($language_list));
