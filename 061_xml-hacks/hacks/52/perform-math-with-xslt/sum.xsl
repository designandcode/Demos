<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="text"/>

<xsl:template match="sums">
<xsl:value-of select="sum(sum[1]/*)"/> rows total
<xsl:value-of select="sum(sum[2]/*)"/> columns total
----
<xsl:value-of select="sum(sum/*)"/> rows + columns total
[<xsl:value-of select="sum(sum/*) div 2"/> divide by 2 check]
</xsl:template>

</xsl:stylesheet>
