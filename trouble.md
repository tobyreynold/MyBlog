遇到的问题:
==========

1. 将PHP工程添加到Xampp下面的htcdocs路径之后，启动服务，浏览器输入controller路径，显示403forbidden
解决方法：将该工程的权限都设置为 “读与写”后，该问题不存在。

2. 首页采用snap.svg制作开场动画,生成一个snap对象需要选择页面中svg标签的id，类似jQuery的写法。

3. snap.circle(X,Y,R) 方法对应参数X为圆心的X轴坐标，参数Y为Y轴坐标，R为圆的半径。