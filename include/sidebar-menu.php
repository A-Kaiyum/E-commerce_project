
<div class="sidebar-menu col-md-3 col-sm-12 hidden-xs ">
<div class="responsive so-megamenu ">
<div class="so-vertical-menu no-gutter compact-hidden">
<nav class="navbar-default">
<div class="container-megamenu vertical open">
<div id="menuHeading-1">
<div class="megamenuToogle-wrapper">
<div class="megamenuToogle-pattern">
<div class="container">
<div>
<span></span>
<span></span>
<span></span>
</div>
All Categories							

</div>
</div>
</div>
</div>
<div class="navbar-header">
<button   id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">

</button>

</div>
<div class="vertical-wrapper " style="display: block;">

<div class="megamenu-pattern">
<div class="container">
<ul class="megamenu">
<?php foreach($categories as $categoryItems){
if($categoryItems['parent_id']==0){

$getSubcategory = $category->getCategoriesByParentId($categoryItems['id']);
?>
<li class="item-vertical style1 <?php if(count($getSubcategory) > 0){ ?>with-sub-menu hover <?php } ?>">
<p class="close-menu"></p>
<a href="category.php?id=<?=$categoryItems['id']?>" class="clearfix">

<span><?php echo $categoryItems['name']; ?></span>

</a>
<?php 

if(count($getSubcategory) > 0){

?>

<div class="sub-menu" data-subwidth="30" style="width: 270px; display: none; right: 0px;">
<div class="content" style="display: none;">
<div class="row">
<div class="col-sm-12">
<div class="row">
<div class="col-sm-12 hover-menu">
<div class="menu">
<ul>
<?php foreach($getSubcategory as $subcategory){ ?>
<li>
<a href="category.php?id=<?=$subcategory['id']?>" class="main-menu"><?php echo $subcategory['name']; ?></a>
</li>
<?php } ?>

</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php } ?>
</li>
<?php  } } ?>

</ul>
</div>
</div>
</div>
</div>
</nav>
</div>
</div>

</div>