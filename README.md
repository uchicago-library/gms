# Goodspeed Manuscript Collection Website

The Goodspeed Manuscript Collection website is a legacy site built with PHP. The 
site metadata is very high quality, and represents a lot of careful work on the part
of Judith Dartt, formerly of SCRC.

Metadata consists of a sequence of [TEI](https://tei-c.org/) files, a homegrown XML file
(gms.xml) with a record for each manuscript, and a more involved structural.xml file. 

The site uses an SQLite database and an XSLT transformation to allow for searching, browsing,
and viewing of project metadata. Originally the site used a Flash-based zoomable viewer, 
but that was recently replaced by the Universal Viewer. Now the site pulls JPEG tiles from
our IIIF Image Server, and all master files are stored in our OCFL filestore. 

To see a list of ARK identifiers for the Goodspeed project, and to access original TIFF files 
for each of the project's digital objects, run the following SQL query in ark_data.db:

```console
SELECT * FROM arks WHERE project='goodspeed';
```
