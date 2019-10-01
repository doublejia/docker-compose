FROM ubuntu

RUN apt-get update
RUN apt-get install subversion -y

RUN mkdir /opt/wwwroot -p
RUN mkdir /opt/svn/src_store -p
RUN chmod -R 777 /opt/svn/src_store
RUN svnserve -d -r /opt/svn/
