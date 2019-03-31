1. COOKIE保存在客户端，而SESSION则保存在服务器端
2. 从安全性来讲，SESSION的安全性更高
3. 从保存内容的类型的角度来讲，COOKIE只保存字符串（及能够自动转换成字符串）
4. 从保存内容的大小来看，COOKIE保存的内容是有限的，比较小，而SESSION基本上没有这个限制
5. 从性能的角度来讲，用SESSION的话，对服务器的压力会更大一些
6. SEEION依赖于COOKIE，但如果禁用COOKIE，也可以通过url传递