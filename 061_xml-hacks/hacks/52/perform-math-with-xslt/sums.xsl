<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="xml" encoding="UTF-8" indent="yes"/>

<xsl:template match="worksheet">
<sums>
 <sum>
  <row1>
 <xsl:value-of select="column[1]/row[1] + column[2]/row[1] + column[3]/row[1]"/>
  </row1>
  <row2>
 <xsl:value-of select="column[1]/row[2] + column[2]/row[2] + column[3]/row[2]"/>
  </row2>
  <row3>
 <xsl:value-of select="column[1]/row[3] + column[2]/row[3] + column[3]/row[3]"/>
  </row3>
  <row4>
 <xsl:value-of select="column[1]/row[4] + column[2]/row[4] + column[3]/row[4]"/>
  </row4>
 </sum>
 <sum>
 <column1>
 <xsl:value-of select="column[1]/row[1] + column[1]/row[2] + column[1]/row[3] + column[1]/row[4]"/>
 </column1> 
 <column2>
 <xsl:value-of select="column[2]/row[1] + column[2]/row[2] + column[2]/row[3] + column[2]/row[4]"/>
 </column2> 
 <column3>
 <xsl:value-of select="column[3]/row[1] + column[3]/row[2] + column[3]/row[3] + column[3]/row[4]"/>
 </column3> 
 </sum>
</sums>
</xsl:template>

</xsl:stylesheet>
