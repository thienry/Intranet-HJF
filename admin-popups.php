<?php

use \Thiago\PageAdmin;
use \Thiago\DB\Sql;
use \Thiago\Model\Popup;
use \Thiago\Model\User;

/**
 * Get Route List all popups stored
 */
$app -> get("/admin/popups", function() {
  User::verifyLogin();
  $user = new User();
  $user = User::getFromSession();
  $popup = Popup::getPopups();
  $popups = new Popup();
  $page = new PageAdmin();
  $page -> setTpl("popups", [
    "user" => $user -> getValues(),
    "popups" => $popups -> getValues(),
    "popups" => Popup::checkList($popup)
  ]);
});

/**
 * Get Route form to create a new popup
 */
$app -> get("/admin/popups/create", function() {
  User::verifyLogin();
  $user = new user();
  $user = User::getFromSession();
  $popup = new Popup();
  $page = new PageAdmin();
  $page -> setTpl("popups-create", [
    "user" => $user -> getValues(),
    "popup" => $popup -> getImageCreate()
  ]); 
});

/**
 * Post Route form to create a new popup
 */
$app->post("/admin/popups/create", function () {
  User::getFromSession();
  $popup = new Popup();
  $_POST["popup_active"] = (isset($_POST["popup_active"])) ? 1 : 0;
  $popup -> setData($_POST);
  $popup -> save();
  if ((int)$_FILES["file"]["size"] > 0) {
    $popup -> setPhoto($_FILES["file"]);
  }
  header("Location: /admin/popups");
  exit;
});

/**
 * Get Route to delete a popup 
 */
$app->get("/admin/popups/:id_popup/delete", function ($id_popup) {
  User::getFromSession();
  $popup = new Popup();
  $popup -> get((int)$id_popup);
  $popup -> delete();
  header("Location: /admin/popups");
  exit;
});

?>