# DB to EXCEL 
Here, you must create a PHP file named read_and_export.php to create the following script, 
which reads records in the items table and creates an Excel file with the content of the items table. 
In the script, a database connection object is declared to retrieve data from the database table. Next, a select query is defined 
to read all records from the items table that are stored in a variable named $items. 
This variable is used to display the content of the table in tabular form and create an Excel file with table contents based on the user’s action. When the user 
clicks on a button that will later be created by the HTML document to export table data in Excel format, the isset() function of this script 
will return “true.” To create the Excel file, a filename is defined with the extension xsl. 
The required header information is passed using the header() function. Next, the $heading variable is used to set the header of the columns in the Excel file. 
The key values of the $items variable are used as the header values. Next, the implode() function is used to write the records of the items table 
into the Excel file.
