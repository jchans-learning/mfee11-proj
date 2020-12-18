import os

os.system('git pull')
os.system('git status')
os.system('git add .')
commitMessage = input('commit message> ')
commitCommand = 'git commit -m ' + '"' + commitMessage + '"'
os.system(commitCommand)
os.system('git push')

# macbook 目前有些版本可能預設還是 python 2 ，有裝 python3 ，用 python3 執行