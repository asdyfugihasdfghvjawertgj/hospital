<?php
include_once('model/category.php');
class CategoryController extends Category{
 public function addCategories($name,$parent){
 	return $this->add($name,$parent);
 }
 public function showCateg(){
 	return $this->showCategs();
 }
 public function viewCat($catid){
 	return $this->viewCats($catid);
 }
 public function updateCat($catid,$name,$parent){
 	return $this->update($catid,$name,$parent);
 }
 public function deleteCat($catid){
 	return $this->delete($catid);
 }
 public function showParent(){
 	return $this->showPar();
 }
 public function showCat($speciality){
 	return $this->show($speciality);
 }
 public function speciality(){
 	return $this->special();
 }
}
?>