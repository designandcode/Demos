<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"/>

<xsl:template match="/">

<html>   
    <head>   
        <title><xsl:value-of select="vacation/title"/></title>   
        <link rel="stylesheet" href="style.css" type="text/css" media="screen"/>   
    </head>   
    <body>   
        <div id="wrapper">   
                <div id="trips">   
                    <h1><xsl:value-of select="vacation/title"/></h1>   
					<ul>   
						<xsl:for-each select="vacation/trip">   
							<!--xsl:sort select="price" data-type="number" order="descending"/>   
								<xsl:choose>   
									<xsl:when test="price > 999"-->   
										<li><span class="too-much">$<xsl:value-of select="price"/> | <xsl:value-of select="city"/>, <xsl:value-of select="state"/> <xsl:value-of select="country" /> | <em><xsl:value-of select="@date"/></em></span> </li>   
									<!--/xsl:when>   
									<xsl:otherwise>   
										<li>$<xsl:value-of select="price"/> | <xsl:value-of select="city"/>, <xsl:value-of select="state"/> <xsl:value-of select="country" /> | <em><xsl:value-of select="@date"/></em> </li>   
									</xsl:otherwise>   
								</xsl:choose-->   
						</xsl:for-each>   
					</ul>   
                </div>   
            </div>   
    </body>   
</html>

</xsl:template>

</xsl:stylesheet>