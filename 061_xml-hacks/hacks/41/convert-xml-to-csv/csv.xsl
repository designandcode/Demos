<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="text"/>

<xsl:template match="Inventory">
 <xsl:apply-templates select="Line"/>
</xsl:template>

<xsl:template match="Line">
 <xsl:for-each select="*">
  <xsl:value-of select="."/>
  <xsl:if test="position() != last()">
   <xsl:value-of select="','"/>
  </xsl:if>
 </xsl:for-each>
 <xsl:text>&#10;</xsl:text>
</xsl:template>

</xsl:stylesheet>
