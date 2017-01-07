#!/usr/bin/perl -w

use Statistics::R;

use CGI;

$ENV{'PATH'} = '/Library/Frameworks/Python.framework/Versions/3.5/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin:/opt/X11/bin';
#print $ENV{'PATH'};

$cgi = CGI->new;

# Create a communication bridge with R and start R
my $R = Statistics::R->new();


my $word2 = $cgi->param('word1');
my $word1 = $cgi->param('word2');
print "hello";

#print `Rscript /Users/Ashwini/cosine.r`;
$R->run(q`library(LSAfun)`);
$R->run(q`load("/var/www/angular-demo/app/cgi-bin/EN_100k_lsa.rda")`);
$R->run(qq`Cosine("$word1","$word2",tvectors=EN_100k_lsa)`);
#print "$word1";

my $result = (split ']', $R->result())[-1];

print "Content-type: text/html\n\n".$result; 
