<style>
.wrap{ max-width:1100px; margin:0 auto;}
.top{ overflow:hidden;margin-right: 48px;}
.left{ width:50%; float:left; min-width:300px;}
.right{ width:50%; float:left; min-width:300px;}
.bottom{ margin-top:40px;overflow:hidden;}
.bl,.bm,.br{ height:520px; float:left; width:33%; min-width:330px;}

/*top white*/
.dscription_ul{
	list-style-image: url('http://localhost/wordpress/flag.bmp');
	margin :5px auto !important ;
}

/*bottom orange*/
.capstone-project{
	font-family: Calibri;
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
	font-family: Calibri;
    font-size: 24px;
    padding-left: 20px;
    margin-bottom: 15px;
}
.capstone-project .cp-main{
	font-family:
    border-radius: 10px;
	height: 300px;
    
}      

.cp-href-blue{
    color: #3C99C6;
}

.cp-item-org{
	margin-bottom: 15px;
    width: 320px;
    
}

.cp-item{
    width: 320px;
    
}

.cp-item-content{
	font-family: Calibri;
    font-size: 13px;
}

.cp-item .cp-item-text{
    width: 220px;
    float: left;
    
}

.cp-item-org .cp-item-text{
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

.cp-item-org .cp-item-pic1{
	float: left;
}

.cp-item-org .cp-item-pic1 img{
    width: 35px;
    height: 35px;
    margin-right: 20px;
    float: left;
}

.cp-item-title{
	font-family: Calibri;
    color: #A3A3A3;
    
}

.cp-item-title1{
	font-family: Calibri;
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
Template Name: project-view-page
*/

get_header(); ?>



<div class="wrap">
	<div class="top">
    	<div class="left"><img src="http://localhost/wordpress/images/ru.png" width="490px" height="430px"></div>
        <div class="right"><?php locate_template( array( 'page-tmp-white.php' ), true ); ?></div>
    </div>
    <div class="bottom">
    	<div class="bl"><?php locate_template( array( 'page-tmp-orange.php' ), true ); ?></div>
        <div class="bm"><?php locate_template( array( 'page-tmp-blue.php' ), true ); ?></div>
        <div class="br"><?php locate_template( array( 'page-tmp-green.php' ), true ); ?></div>
    </div>
</div>

<?php get_footer(); ?>

