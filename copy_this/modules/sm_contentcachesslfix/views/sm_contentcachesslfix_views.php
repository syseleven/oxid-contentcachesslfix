<?php
/**
* [SM] Contentcache - HTTP/HTTPS FIX
*
* Contentcache - HTTP/HTTPS FIX | Extend the ViewId with the parameter '|ssl', if the Webside is called via HTTPS
*
*	4.6x  activate the Modul
*	4.5x  insert aModules
			info => sm_contentcachesslfix/views/sm_contentcachesslfix_views
			start => sm_contentcachesslfix/views/sm_contentcachesslfix_views
			details => sm_contentcachesslfix/views/sm_contentcachesslfix_views
			alist => sm_contentcachesslfix/views/sm_contentcachesslfix_views
			vendorlist => sm_contentcachesslfix/views/sm_contentcachesslfix_views
* 
* As is - no warranty
*
* @author     SHOPMACHER <info@shopmacher.de>
*/
class sm_contentcachesslfix_views extends sm_contentcachesslfix_views_parent
{
	public function getViewId()
    {
    	if ( $this->_sViewId )
    	{
            return $this->_sViewId;
        }
    	$this->_sViewId = parent::getViewId();
    	if($this->_sViewId)
    	{
    		$myConfig = $this->getConfig();
    		if($myConfig->isSsl())
    		{
    			$this->_sViewId .= "|ssl";
    		}
    	}
        return $this->_sViewId;
    }
}