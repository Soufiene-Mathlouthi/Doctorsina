<!--
    This file defines some of the browsers that Microsoft's implementation provides in
    <windir>\Microsoft.NET\Framework\<ver>\CONFIG\Browsers\*.browser
	
	It is not derived from any file distributed with Microsoft's implementation.  Since
	we can't distribute MS's browser files, we use browscap.ini to determine 
	browser capabilities.  Then, if and only if the application contains App_Browser/*.browser
	files and we are using .NET 2.0 or higher, we supplement the capabilities with the 
	information in those files and the files in this directory.  The primary goal of this file
	is provide browser definitions that might be referenced in App_Browser/*.browser files.
-->
<browsers>
  <default