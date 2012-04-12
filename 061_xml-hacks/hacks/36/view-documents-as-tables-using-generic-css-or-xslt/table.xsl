<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html" />

<xsl:template match="*">
 <html>
 <head><title>Auto-generated table</title></head>
 <body>
 <table border="1">
  <xsl:for-each select="*">
   <tr>
    <xsl:for-each select="*">
     <td><xsl:value-of select="."/></td>
    </xsl:for-each>
   </tr>
  </xsl:for-each>
 </table>
 </body>
 </html>
</xsl:template>

</xsl:stylesheet>
