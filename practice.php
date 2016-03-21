Note#
	1) . in Git, is used to refer all the files.
	2) 

Git General:

	- On your computer, move the file you'd like to upload to GitHub into the local directory that was created when you cloned the repository.
	- Change the current working directory to your local repository.
	- Stage the file for the first commit to your repository.
		- git add .
		Note#: Adds the files in the local repository and stages them for commit. To unstage a file, use 'git reset HEAD YOUR-FILE'.
	
	- Commit the files that you've staged in your local repository.
		- git commit -m "First commit"
		Note#: Commits the tracked changes and prepares them to be pushed to a remote repository. To remove this commit and modify the file, use 'git reset --soft HEAD~1' and commit and add the file again. 

	- Push the changes in your local repository to GitHub.
		- git push origin master
		Note#: Pushes the changes in your local repository up to the remote repository you specified as the origin

Advance GIT Commands:
	
	1) If you have deleted a file, from your current working branch then recover that file before doing any additional commuits Using :
		- git reset HEAD file-name
		- git checkout -- abc.php
	OR
	- This command will reset the head and unstage all of the changes:
		- git reset HEAD .
	- Then run this to restore all of the files:
		- git checkout .

	2) 
________________________________________________________________________________________________________________________________________


Git Dev site processing:
	- Go into the Master branch
	- take pull (git pull): It will give you updated code of master branch 
	- git checkout dev : will move you to the dev environment, and if all the files are new then will become downloading all the files 
	- git pull origin dev
	- git branch -a
	- 
	- 
