#!/usr/bin/perl

print "Content-type: text/html\n\n";
print "<!DOCTYPE html>";
print "<html><head><title>CGI Example</title></head>\n";
print "<body><h2>Hello, Internet!</h2><p>";
$e = $ENV{"QUERY_STRING"};
if($e ne "") {
    print "Query string is $e";
}
print "</body></html>";

