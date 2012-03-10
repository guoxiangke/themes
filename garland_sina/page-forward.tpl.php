<?php
	/*发布页
	 **/
	{$account=$user;}
	if(in_array('Buyer',$account->roles)){	//对于卖家
		
			//return '亲，您貌似来到了禁区～！^_^';
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <title><?php print $head_title ?></title>
    <?php print $styles ?>
    <?php print $scripts ?>
		<link rel="stylesheet" type="text/css" href="<?php echo drupal_get_path('theme', 'vp')?>/layout.css">
    <!--[if lt IE 7]>
      <?php print phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>
<body id="page_new">
<div class="top">
   <?php include(path_to_theme().'/vp_page-top.tpl.php');?>
</div>
<div class="vp_content_ucenter UCenter">
	<?php if( $messages ) : ?>
	<div class="messages status">
	<?php print $messages; ?>
	</div>
	<?php endif; ?>
<div class="buy_left">
<div class="fl_nav">
	<?php switch (arg(1)) {
		case '1':
			$tag_dq_1 = 'tag_dq';
			break;
		case '2':
			$tag_dq_2 = 'tag_dq';
			break;
		case '3':
			$tag_dq_3 = 'tag_dq';
			break;	
		case '4':
			$tag_dq_4 = 'tag_dq';
			break;
		case '5':
			$tag_dq_5 = 'tag_dq';
			break;	
		case '6':
			$tag_dq_6 = 'tag_dq';
			break;
		default:
			$tag_dq = 'tag_dq';
			break;
	}

	?>
	<a class="nav <?php echo $tag_dq  ?>" href="<?php echo url('UCenter/0/'.$page_uid)?>">全部</a>    
	<a class="nav <?php echo $tag_dq_1?>" href="<?php echo url('UCenter/1/'.$page_uid)?>">新品</a>    
	<a class="nav <?php echo $tag_dq_3?>" href="<?php echo url('UCenter/3/'.$page_uid)?>">爆款</a>    
	<a class="nav <?php echo $tag_dq_4?>" href="<?php echo url('UCenter/4/'.$page_uid)?>">特卖</a>    
	<a class="nav <?php echo $tag_dq_2?>" href="<?php echo url('UCenter/2/'.$page_uid)?>">活动</a>    
	<a class="nav <?php echo $tag_dq_6?>" href="<?php echo url('UCenter/6/'.$page_uid)?>">真人秀</a>    
	<a class="nav <?php echo $tag_dq_5?>" href="<?php echo url('UCenter/5/'.$page_uid)?>">转让潮</a></div>
<?php
	print $content;
	drupal_add_css(drupal_get_path('module', 'sina_vp') .'/css/scroll.css');
	drupal_add_js(drupal_get_path('module', 'sina_vp') .'/js/scroll.js');

?>
 		<script src="<?php echo drupal_get_path('module', 'sina_vp')?>/js/gotop.js" type="text/javascript"></script>
	  <link href="<?php echo drupal_get_path('module', 'sina_vp')?>/css/gotop.css" type="text/css" rel="stylesheet">
		<a id="go-top" href="#top">
		<span class="top-btn"><span class="sj">♦</span><span class="fk">▐</span>返回顶部</span>
		</a>
		<style>.hidden{display:none;}</style>
		<script type="text/javascript">
			function toggleit(nid){
					$('#Wrap_'+nid).toggle(1000);
			}
			function show_more(nid,Wrap_type,tid){//talkWrap comtWrap zfWrap
					//$('#Wrap_'+nid)
					var c = $('#Wrap_'+nid);
					c.toggle(1000);
					if (Wrap_type != 'comtWrap')
						$.ajax({
							url: 'http://dev.weipujie.com/?q=vp/comment_ajax/'+nid,
							type: 'POST',
							data: '',
							dataType: 'json',
						  success: function(json) {								
						  	c.html(json);
						  },
						  error: function(XMLHttpRequest, textStatus, errorThrown){
							alert('发生错误，请联系管理员1');
							}
						});
						//$('#Wrap_'+nid).load('http://dev.weipujie.com/?q=vp/comment_ajax/'+nid+' #comments');
						// if($('#'+Wrap).hasClass('hidden')){$('#'+Wrap).slideDown('1000').removeClass('hidden');}
					else 
						$('#Wrap_'+nid).load('http://dev.weipujie.com/?q=forward/'+tid+'/'+nid+'/ajax #node-form');  
						//$('#'+Wrap).slideUp('1000').addClass('hidden')				
						//alert('http://dev.weipujie.com/?q=forward/'+tid+'/'+nid+' #node-form');
			};
			/*$(document).ready(function() {
				$('.counts').find('.flag').one('click', function(){					
				  var $count_value = $(this).parent().parent().find('.count_value');
					console.log('count_value',$count_value);
				  var curValue = $count_value.html();
					console.log('curValue',curValue);
				  $count_value.html( parseInt(curValue) + 1 );
					$(this).one('click', function(){
				    //wirte func minus1() code..
				    var $count_value = $(this).parent().parent().find('.count_value');
					  var curValue = $count_value.html();
						console.log('4',curValue);
						if( parseInt(curValue)==1)
							$count_value.html("0");
					  else 
							$count_value.html( parseInt(curValue) - 1 );
				  });
				});
			});*/

			
		</script>

</div>

<div class="buy_right"> 
	<?php include(path_to_theme().'/vp_page-buy-right.tpl.php');?>
</div>

<div class="clear"></div>

	<div id="footer" class="footer"><?php print $footer_message . $footer ?></div>
  <?php print $closure ?>
</body>
</html>