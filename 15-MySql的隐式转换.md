
# 字段为 ```INT```, 查询条件为 ```CHAR```时

```mysql

# 假设 X 为 INT 类型

SELECT * FROM TB WHERE X = '010哈哈';

# 将查询条件转换为INT, 如果是字符串前导都是数字将会进行截取, 如果不是转换为0。

SELECT * FROM TB WHERE X = 010;

```

# 字段为 ```CHAR/VARCHAR```, 查询条件为 ```INT```时

```mysql

# 假设 X 为 CHAR/VARCHAR 类型

SELECT * FROM TB WHERE X = 10;

# 将查询字段为换为INT再进行比较，可能会造成全表扫描

# ID    X           X_TRANS_RESULT
# 1     010哈哈     10
# 2     你好        0
# 3     66大佬      66

SELECT * FROM TB WHERE X = 1;

# 相当于:

SELECT * FROM TB WHERE X_TRANS_RESULT = 1;

```