.data
array: .space 100	0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0
buffer: .space 20
endline: .asciiz "\n"
str1: .asciiz "Enter string"
.text
.global main
main:

	
	li $v0,8
	la $a0,buffer
	li $a1,20
	syscall
	
	la $t1,buffer
	la $t6,array
	
	li $s1,65
	li $s2,97
	lb $t5,endline
	
	loop:
			lb $t3,0($t1)
			sub $t4,$s1,$t3
			beq $t4,0,inc
			sub $t4,Ss2,$t3
			beq $t4,0,inc
			
			beq $t3,$t5,nxt
			
			addi $t1,$t1,1
			j loop
			
	nxt:
			beq $s1,90,endloop
			
			addi $s1,$s1,1
			addi $s2,$s2,1
			addi $t6,$t6,4
			la $t1,buffer
	inc:
			lw $t0,0($t6)
			addi $t0,$t0,1
			sw $t0,0($t6)
			addi $t1,$t1,1
			j loop
			
	endloop:
	la $t6,array
	la $s0,0
	loop1:
		beq $s0,26,endloop1
		li $v0,1
		la $a0,0($t6)
		syscall
		
		addi $t6,$t6,4
		addi $s0,$s0,1
		j loop1
		
	endloop1:
	li $v0,10
	syscall