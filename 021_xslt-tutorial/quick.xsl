<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"/>

<xsl:template match="/">

<html>   
    <head>   
        <title><xsl:value-of select="feed/totalresults"/></title>   
        <link rel="stylesheet" href="quick.css" type="text/css" media="screen"/>   
    </head>   
    <body>   
         
                <div id="tweets-container">   
                    
					<ul>
						<xsl:for-each select="feed/tweets/entry">
							<li class="result"><img src="{tweet_profile_image_url}" alt="Home" title="Home" /><br /><xsl:value-of select="tweet_text"/> - <xsl:value-of select="tweet_from_user"/></li>
						</xsl:for-each>
					</ul>
					
                </div>   
           
    </body>   
</html>

</xsl:template>

</xsl:stylesheet>