-- Script Feito por Luiz Ribeiro

-- Create DB
Create Database dbUsuario;
Use dbUsuario;

-- Drop Table
Drop Table If Exists TB_Usuario;

-- Create Table
Create Table TB_Usuario (
	ID_Usuario      Int Primary Key auto_increment,
	Nm_Usuario      Varchar(200) Not Null,
	Ds_EmailUsuario Varchar(150) Not Null,
	Pw_Usuario      Varchar(150) Not Null
);

-- Insert
Insert Into TB_Usuario (Nm_Usuario, Ds_EmailUsuario, Pw_Usuario) Values ('Luizzz', 'luizzz@gmail.com', 'qwe123');
Insert Into TB_Usuario (Nm_Usuario, Ds_EmailUsuario, Pw_Usuario) Values ('Moisés', 'moisesss@gmail.com', 'rty456');
Insert Into TB_Usuario (Nm_Usuario, Ds_EmailUsuario, Pw_Usuario) Values ('Gabi', 'gabiii@gmail.com', 'asd789');