<?php if ($_GET['ajax'] != 1): ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<?php if ($this->_var['description']): ?><meta name="description" content="<?php echo $this->_var['description']; ?>"/><?php endif; ?>
<?php if ($this->_var['keywords']): ?><meta name="keywords" content="<?php echo $this->_var['keywords']; ?>"/><?php endif; ?>
<title><?php echo $this->_var['page_title']; ?> - ESUP网游</title>
<?php echo $this->fetch('library/html_header.lbi'); ?>
</head>
<body id="page_<?php echo $this->_var['pname']; ?>">
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div id="content"><div class="container">
	<?php echo $this->fetch('library/ur_here.lbi'); ?>
	<div class="col_main">
	<?php echo $this->_var['render']['before_col_main']; ?>
	
		<div class="article box thin_box">
			<div class="hd"><h3></h3><div class="extra"></div></div>
			<div class="bd">
<?php endif; ?>
				<div class="article_title clearfix">
					<h1><?php echo htmlspecialchars($this->_var['article']['title']); ?></h1>
					<p class="article_info"><span class="author"><?php echo $this->_var['article']['author']; ?></span><span class="time"><?php echo $this->_var['article']['add_time']; ?></span></p>
				</div>
				<?php if ($this->_var['article']['content']): ?>
				<div class="article_content"><?php echo $this->_var['article']['content']; ?></div>
				<?php else: ?>
				<p class="empty"><?php echo $this->_var['lang']['content_empty']; ?></p>
				<?php endif; ?>
				<?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?>
				<p class="download_wrapper"><a href="<?php echo $this->_var['article']['file_url']; ?>" class="btn_special btn_download"><?php echo $this->_var['lang']['relative_file']; ?></a></p>
				<?php endif; ?>
<?php if ($_GET['ajax'] != 1): ?>
				<p class="nearby"><?php if ($this->_var['prev_article']): ?><a href="<?php echo $this->_var['prev_article']['url']; ?>" class="prev">&laquo;<?php echo $this->_var['lang']['prev_article']; ?><?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['prev_article']['title']; ?></a><?php endif; ?>
				<?php if ($this->_var['next_article']): ?><a href="<?php echo $this->_var['next_article']['url']; ?>" class="next"><?php echo $this->_var['lang']['next_article']; ?><?php echo $this->_var['lang']['colon']; ?><?php echo $this->_var['next_article']['title']; ?>&raquo;</a><?php endif; ?>
				</p>
			</div>
		</div>
		<div class="comment_box box">
			<div class="hd"><h3><?php echo $this->_var['lang']['article_comment']; ?></h3><div class="extra"></div></div>
			<div class="bd">
				<div id="ECS_COMMENT">
					<?php 
$k = array (
  'name' => 'comments',
  'type' => $this->_var['type'],
  'id' => $this->_var['id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
				</div>
			</div>
		</div>
	
	<?php echo $this->_var['render']['after_col_main']; ?>
	</div>
	<div class="col_sub">
	<?php echo $this->_var['render']['before_col_sub']; ?>
	
	
	<?php echo $this->fetch('library/article_category_tree.lbi'); ?>
	
	
	<?php echo $this->_var['render']['after_col_sub']; ?>
	</div>
</div></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->fetch('library/html_footer.lbi'); ?>
</body>
</html>
<?php endif; ?>