<?php
/* @var $this SiteController */

// if user logged in redirect to homepage (Student, employer, admin)
if (User::isCurrentUserStudent()) {
	$this->redirect("/JobFair/index.php/home/studenthome");
} elseif (User::isCurrentUserEmployer()) {
	$this->redirect("/JobFair/index.php/home/employerhome");
} elseif (User::isCurrentUserAdmin()) {
	$this->redirect("/JobFair/index.php/home/adminhome");	
	
}	// redirect to login page
    else  {
		$this->redirect("/JobFair/index.php/site/login");
}

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>CHtml::encode(Yii::app()->name 
    	),)); ?>
<i>Making Conections</i>


<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'/JobFair/images/imgs/slider4.gif', 'label'=>'Virtual Job Fair', 'caption'=>'Virtual Job Fair is an efficient way to make a connection between employers and job seeking students. Recruiting high quality employees or finding the perfect job is no easy task; Virtual Job Fair provides a simple an efficient solution to this.'),
    	array('image'=>'/JobFair/images/imgs/slider5.gif', 'label'=>'-Employers-', 'caption'=>'Recruiting is difficult and expensive, especially when you need to send personnel to the universities to find students. Virtual Job Fair allows you to virtually do this. With features such as Live Video Interview, your personnel can interview and get to know the candidates without leaving the office. '),
    	array('image'=>'/JobFair/images/imgs/slider.png', 'label'=>'-Students-', 'caption'=>'Need a job and do not know where to start? Well start here. Virtual Job Fair allows you to create a profile and showcase your skills and abilities for free. We also match you with current job opening based on your skills.'),
    		 
    		),
		'htmlOptions' => array(),
)); ?>

<?php $this->endWidget(); ?>
