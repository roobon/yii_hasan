<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<h2>All Product information</h2>

<?php
foreach($products as $val) {


	echo $val->id . "<br>";
	echo $val->product_name . "<br>";
	echo $val->product_details . "<br>";
}


	

?>


