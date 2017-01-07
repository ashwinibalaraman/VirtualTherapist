There is a quiz in the website that is propelled by a perl script in the cg-bin directory.
In the perl script is an R program that depends on a semantic space that gets downloaded at the install location by running the shell script install.sh


At the time of installation, please run cgi-bin/install.sh 

#######Install perl#######
yum install perl-CPAN

######Install R#########
sudo yum install R

######Install R module########
cpan -i Statistics::R 



