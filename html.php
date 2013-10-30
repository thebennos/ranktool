<div style="margin-left:40px; float:left;">
<form name="gtmatrix_call" method="post">
<h3>Paste Your Domain name in the below input box. Each domain should be in each line</h3>
<textarea name="domain_urls" placeholder="www.yourdomain.com" cols="72" rows="10" style="width: 355px;"></textarea><br>
<input type="submit" name="domain_call" id="domain_call" value="Find your Domain Rank"></form>



<?php
try {
    
	if($_POST['domain_urls']!=""){
		$urls = $_POST['domain_urls'];
        $urlsN= trim(str_replace("\n",",",$urls));	
		$arrUrl = explode(",", $urlsN);
	
   
   
    /**
     * Create a new SEOstats object to request SEO metrics
     * for the given URL.
     */
   
?>
 
  <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <th align="left" valign="top" colspan="2">All Domains Ranking </th>    
  </tr>
   <?php
   
	foreach ($arrUrl as $url)
   {
    
	$seostats = new SEOstats(trim($url));
        // create a new object to request google metrics
        $google = $seostats->Google();
    ?>
  <tr class="background_plus"> 
    <td align="left" valign="top"><?php echo $url; ?>&nbsp;<strong><?php print $google->getPageRank(); ?></strong></td>      
     </tr>  
    
   <?php } ?>
    
  </table>
<?php
	}
} catch (SEOstatsException $e) {
    die($e->getMessage());
}
?>
</div>