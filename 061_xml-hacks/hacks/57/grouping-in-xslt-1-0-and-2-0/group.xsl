<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html"/>
<xsl:key name="list" match="uscity" use="@state"/>

<xsl:template match="/">
<html>
<head>
<title>Western State Cities</title></head>
<style type="text/css">
h2 {font-family:verdana,helvetica,sans-serif;font-size:13pt}
li {font-family:verdana,helvetica,sans-serif;font-size:11pt}
</style>
<body>
<xsl:for-each select="/uscities/western/uscity[generate-id(.)=generate-id(key('list', @state))]/@state">
<xsl:sort/>
<h2><xsl:value-of select="."/></h2>
<ul>
 <xsl:for-each select="key('list', .)">
  <xsl:sort/>
  <li><xsl:value-of select="."/></li>
 </xsl:for-each>
</ul>
</xsl:for-each>
</body>
</html>
</xsl:template>

</xsl:stylesheet>
