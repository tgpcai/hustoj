hustoj -- 请一定认真看完本页再动手安装，以免无谓的折腾！

======
本人用基于腾讯云Ubuntu 14.0系统搭建Apache2+Mysql+php5的服务器环境。

不知是自己能力问题还是电脑配置问题，根据github的zhblue/hustoj中提示的安装步骤，总是在配置某个环境或者下载安装某个所需软件的过程中，系统就会弹出莫名其妙的错误。zhblue/hustoj/README.md中千万提醒读者不要安装apache，而我就是基于LAMP的基础上安装成功的。

网上的安装教程五花八门，且大多数是在本地虚拟机中完成安装，几乎没有基于云服务器安装的教程且很少有教程真正把整个安装过程描述清楚，在我踩了巨多坑，犯了许多无谓的错误后，终于完成了环境的配置以及Hustoj的安装，接下来就让我和你们一起分享一下我的安装过程，我相信，看完我的文章之后，保证你能完美完成配置！

安装过程中所需的软件和环境：

腾讯云服务器+Ubuntu14.04STL+Apache2+Mysql5.2+php5+Xshell6+WinSCP

Xshell6：一款功能强大的终端模拟软件，让用户能通过互联网直接连接远程主机

WinSCP：是一个Windows环境下使用SSH的开源图形化SFTP客户端。同时支持SCP协议。它的主要功能就是在本地与远程计算机间安全的复制文件。.winscp也可以链接其他系统,比如linux系统。

(我会在相应博客里面提供这两个软件的破解版的下载以及使用~)
