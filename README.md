# Websites
Websites used internally, and externally


## RickRoll
Our internal RickRoller website. 
Often hosted on rickroll.jvlan.ch.
It's a simple redirection to a Mp4 file.
Combined with our Firewall, this redirects players that start to look at "suspisoucs" things on the web to a rickroll.
We play the Mp4 file directly so that the sound plays out loud, and the girl/guy is shamed. 
To avoir pepole playing around, in our firewall we create an internal natting rule to redirect DNS traffic to one of our DNS, which will always redirect to a rickroll if the user tries to go on a Illegal/Prohibited website.


## DownloadExplorer
Our internal file explorer.
Often hosted on downloads.jvlan.ch
This website allows our player to download the free games directly internally that will be used during the event.
For now there is an exemple with a TF2 and CS GO exemple.

Basically to make it work, you need to create a folder, the php file will list all folders.
Then in each folder it will search for the logo.png file which will be shown as the image of the game.
Then you need to create a zip file of each game called download.zip. 
From there each player will be able to download the wanted games.