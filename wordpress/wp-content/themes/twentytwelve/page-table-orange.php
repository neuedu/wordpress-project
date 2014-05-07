<style>
.capstone-project{
    width: 320px;
    border-radius: 10px;

}      

.head-line-green{
    height: 4px;
    width: 100%;
    border: 0px;
    background-color: #68C318;
    margin-bottom: 15px;
}

.head-line-blue{
    height: 4px;
    width: 100%;
    border: 0px;
    background-color: #007EB9;
    margin-bottom: 15px;
}

.head-line-orange{
    height: 4px;
    width: 100%;
    border: 0px;
    background-color: #FB9824;
    margin-bottom: 15px;
}

.capstone-project .cp-title{
    font-size: 24px;
    padding-left: 20px;
    margin-bottom: 15px;
}
.capstone-project .cp-main{
    border-radius: 10px;
    
}      

.cp-href-blue{
    color: #3C99C6;
}

.cp-item{
    width: 320px;
    
}

.cp-item-content{
    font-size: 13px;
}

.cp-item .cp-item-text{
    width: 220px;
    float: left;
    
}

.cp-line{
    height: 0px;
    border-color: #A3A3A3;
    border-bottom-style: dotted;
    border-bottom-width: 2px;
    margin-top: 15px;
    margin-bottom: 15px;
}
.cp-item .cp-item-pic{
    float: left;
}

.cp-item .cp-item-pic img{
    width: 78px;
    height: 78px;
    margin-right: 20px;
    float: left;
}

.cp-item .cp-item-pic1 img{
    width: 35px;
    height: 35px;
    margin-right: 20px;
    float: left;
}

.cp-item-title{
    color: #A3A3A3;
    
}

.cp-item-title1{
    color: #A3A3A3;
    width: 270px;
}
    
.button-div{
    text-align: center;
    margin:25px auto;
}

</style>
<?php
/*
Template Name: Table_orange1
*/
?>

<div id="content" class="widecolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post();?>

	<?php the_content();?>
    
    <?php endwhile; endif; ?>



