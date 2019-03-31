# Memcache #

1. 最大30天的数据过期时间, 设置为永久的也会在这个时间过期
2. 单个item最大数据是1MB，超过1MB数据不予存储
3. 存储数据的类型都是String字符串类型
4. 本身没有持久化功能
5. 可以使用多核（多线程）

# Redis #

1. 五种数据类型, string，hash，list，set及zset(sorted set)。
2. 有持久化功能
3. 单个key（变量）存放的数据有1GB的限制
