<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output doctype-public="-//W3C//DTD XHTML 1.0 Strict//EN" doctype-system="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"/>

<xsl:template match="/">

<html>   
      
    <body style="width:1200px">
		<xsl:variable name="base-url">
		<xsl:value-of select="article/base-url"/>
		</xsl:variable>
		<xsl:variable name="img-folder">
		<xsl:value-of select="article/img-folder"/>
		</xsl:variable>
		<xsl:variable name="article-year">
		<xsl:value-of select="article/article-year"/>
		</xsl:variable>
		<xsl:variable name="article-month">
		<xsl:value-of select="article/article-month"/>
		</xsl:variable>
		<xsl:variable name="title-slug">
		<xsl:value-of select="article/title-slug"/>
		</xsl:variable>
		
		      
		 <div style="width:600px; margin-right:50px; border-right:1px solid #ccc; position:relative; float:left">
		 <p><xsl:value-of select="article/intro"/></p>
		 <p></p>
		 
		 <xsl:for-each select="article/description">
		 <xsl:choose>
		 <xsl:when test="subtitle != ''">
		 <p></p><p style="color:#fff; font-weight:bold;"><span class="roundup-subtitle" style="font-size:22px;" ><span style="color:#fff; background-color:#355A6C; padding:.25em .5em;" class="mobile-default"><xsl:value-of select="subtitle"/></span></span></p><p></p>
		 </xsl:when>
		 </xsl:choose>
		 <xsl:choose>
		 <!--xsl:when test="step != ''"-->
		 <xsl:when test="url != ''">
		 <p style="color:#355A6C; font-weight:bold;"><span class="roundup-subtitle" style="color:#355A6C; font-size:22px;"><span class="mobile-default" style="color:#355A6C;"><xsl:number value="position()" format="1" />. <a href="{url}"><xsl:value-of select="step"/></a></span></span></p>
		 </xsl:when>
		 <xsl:otherwise>
		 <p style="color:#355A6C; font-weight:bold;"><span class="roundup-subtitle" style="color:#355A6C; font-size:22px;"><span class="mobile-default" style="color:#355A6C;"><xsl:number value="position()" format="1" />. <xsl:value-of select="step"/></span></span></p>
		 </xsl:otherwise>
		 <!--/xsl:when-->
		 </xsl:choose>
		 <xsl:choose>
		 <xsl:when test="content != ''">
		 <p><xsl:value-of select="content"/></p><p></p>
		 </xsl:when>
		 </xsl:choose>
		 <xsl:choose>
		 <xsl:when test="image != '' and url != ''">
		 <!--p class="roundup-img" ><a><img style="border:4px solid #D5D5D5;" src="<xsl:copy-of select="$base-url" /><xsl:copy-of select="$img-folder" /><xsl:copy-of select="$article-year" /><xsl:copy-of select="$article-month" /><xsl:copy-of select="$title-slug" />-<xsl:value-of select="image"/>" alt="article thumbnail"/></a></p><p></p-->
		 <p class="roundup-img" ><a href="{url}"><img style="border:4px solid #D5D5D5;" src="{$base-url}{$img-folder}{$article-year}{$article-month}{$title-slug}-{image}" alt="article thumbnail"/></a></p><p></p>
		 
		 </xsl:when>
		 <xsl:when test="image != ''">
		 <p class="roundup-img" ><img style="border:4px solid #D5D5D5;" src="{$base-url}{$img-folder}{$article-year}{$article-month}{$title-slug}-{image}" alt="article thumbnail"/></p><p></p>
		 </xsl:when>
		 </xsl:choose>
		 </xsl:for-each>
		 
		 <xsl:choose>
		 <xsl:when test="article/closing != ''">
         <p><xsl:value-of select="article/closing"/></p>
		 <p></p>
		 </xsl:when>
		 </xsl:choose>
		 </div>
		 
		 
		 <div style="width:500px; position:relative; float:left">
         <![CDATA[<p>]]><xsl:value-of select="article/intro"/><![CDATA[</p>]]>
		 <![CDATA[<p>&nbsp;</p>]]>
		 
		 <xsl:for-each select="article/description">
		 <xsl:choose>
		 <xsl:when test="subtitle != ''">
		 <![CDATA[<p>&nbsp;</p><p style="color:#fff; font-weight:bold;"><span class="roundup-subtitle" style="font-size:22px;" ><span style="color:#fff; background-color:#355A6C; padding:.25em .5em;" class="mobile-default">]]><xsl:value-of select="subtitle"/><![CDATA[</span></span></p><p>&nbsp;</p>]]>
		 </xsl:when>
		 </xsl:choose>
		 <xsl:choose>
		 <!--xsl:when test="step != ''"-->
		 <xsl:when test="url != ''">
		 <![CDATA[<p style="color:#355A6C; font-weight:bold;"><span class="roundup-subtitle" style="color:#355A6C; font-size:22px;"><span class="mobile-default" style="color:#355A6C;">]]><xsl:number value="position()" format="1" />. <![CDATA[<a href="]]><xsl:value-of select="url"/><![CDATA[">]]><xsl:value-of select="step"/><![CDATA[</a></span></span></p>]]>
		 </xsl:when>
		 <xsl:otherwise>
		 <![CDATA[<p style="color:#355A6C; font-weight:bold;"><span class="roundup-subtitle" style="color:#355A6C; font-size:22px;"><span class="mobile-default" style="color:#355A6C;">]]><xsl:number value="position()" format="1" />. <xsl:value-of select="step"/><![CDATA[</span></span></p>]]>
		 </xsl:otherwise>
		 <!--/xsl:when-->
		 </xsl:choose>
		 <xsl:choose>
		 <xsl:when test="content != ''">
		 <![CDATA[<p>]]><xsl:value-of select="content"/><![CDATA[</p><p>&nbsp;</p>]]>
		 </xsl:when>
		 </xsl:choose>
		 <xsl:choose>
		 <xsl:when test="image != '' and url != ''">
		 <![CDATA[<p class="roundup-img" ><a href="]]><xsl:value-of select="url"/><![CDATA["><img style="border:4px solid #D5D5D5;" src="]]><xsl:copy-of select="$base-url" /><xsl:copy-of select="$img-folder" /><xsl:copy-of select="$article-year" /><xsl:copy-of select="$article-month" /><xsl:copy-of select="$title-slug" />-<xsl:value-of select="image"/><![CDATA[" alt="article thumbnail"/></a></p><p>&nbsp;</p>]]>
		 </xsl:when>
		 <xsl:when test="image != ''">
		  <![CDATA[<p class="roundup-img" ><img style="border:4px solid #D5D5D5;" src="]]><xsl:copy-of select="$base-url" /><xsl:copy-of select="$img-folder" /><xsl:copy-of select="$article-year" /><xsl:copy-of select="$article-month" /><xsl:copy-of select="$title-slug" />-<xsl:value-of select="image"/><![CDATA[" alt="article thumbnail"/></p><p>&nbsp;</p>]]>
		 </xsl:when>
		 </xsl:choose>
		 </xsl:for-each>
		 
		 <xsl:choose>
		 <xsl:when test="article/closing != ''">
         <![CDATA[<p>]]><xsl:value-of select="article/closing"/><![CDATA[</p>]]>
		 <![CDATA[<p>&nbsp;</p>]]>
		 </xsl:when>
		 </xsl:choose>
        </div>
    </body>   
</html>

</xsl:template>

</xsl:stylesheet>