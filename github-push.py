import os

os.system('git status')
os.system('git add .')
commitMessage = input('commit message> ')
commitCommand = 'git commit -m ' + '"' + commitMessage + '"'
os.system(commitCommand)
os.system('git push')

# macbook 目前有些版本可能預設還是 python 2 ，有裝 python3
# 可以用以下指令安裝，執行 venv
# python3 -m venv tutorial-env
# source tutorial-venv/bin/activate