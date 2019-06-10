# git_tutorial
git_tutorial
	ls 查看文件
	ls -a 查看所有文件 包括隐藏的
	touch 1.php  建立1.php 文件
	
	rm -r 1.php 删除文件
	
	
	git config --global user.name " xx "
	git config --global user.email " xx "
	git init 初始化 建立.git
	
	git status 	  	查看状态 详细的
	git status -s 	查看状态 简单的
	
	git add 1.php  添加1.php到库 
	git add . 	   添加所有文件到库 
	
	git log 日志
	git log --oneline 单行查看日志
	git reflog 查看所有提交日志
	
	git add 1.php statged 状态(绿色m)
	
	git commit -m " msg "
	git commit -am " msg " 同时stage和commit , 那个文件已经被add 过的 否则不行
	git commit --amend --no-edit(不修改评论) 不增加新的提交 而是合并到最后一次提交中去 
	
	git diff 		查看修改详情
	git diff --cached	查看add后的不同
	git diff HEAD 查看add后 又修改了,却未add 的状态 
	

	git reset --hard HEAD 返回到最后一次提交
	git reset --hard HEAD^ 以最后一次为参照 , 返回前一次提交
	git reset --hard HEAD^^ / HEAD~2 以最后一次为参照 , 返回前两次提交
	git reset --hard 9b2b80c  返回某个id号的提交
	git reset --hard HEAD@{0}  返回某个HEAD号的提交
	
	git checkout 9b2b80c -- 1.php  把1.php 返回到 某个id号的提交




## 分支(master 默认主分支)
	git log --oneline --graph 图形化显示分支
	git branch 查看分支
	git branch dev 建立分支
	git checkout -b dev 建立该分支 同时切换到该分支
	
	git checkout 切换分支
	git branch -d dev 删除dev分支 , 删除前不能在这个分支上
	
	https://www.youtube.com/watch?v=fLvr4BRoJ8I&list=PLXO45tsB95cKysjmSNln65YoUt9lwEl7-&index=9
	git rebase dev
	
	git merge --no-ff -m " keep merge info " dev 把dev分支合并到主分支 需要确定自己在master分支
	
	
	
	
## 临时修改 
	git stash 暂时缓存分支任务
	git stash pop 拿回暂时缓存分支任务
	
## 连接 github
	git remote add origin https://github.com/yanick2019/git_tutorial.git
	git pull origin master 上传github之前pull一下

	git push -u origin master 推master分支到github
	git push -u origin dev 推dev分支到github
	git push --force origin master 强推
## 查看连接
	git remote -v show
## 断开链接
	git remote rm origin
	
$ git clone https://github.com/USERNAME/REPOSITORY.git
# Clones a repository to your computer

$ git fetch remotename
# Fetches updates made to a remote repository

$ git merge remotename/branchname
# Merges updates made online with your local work	

## 上传github.com

  git push -u origin master  出错时 [rejected] master -> master (fetch first) 	
	git fetch origin master:tmp
	git rebase tmp
	git push origin HEAD:master
	git branch -D tmp	
	
Type q to exit this screen
	
	
