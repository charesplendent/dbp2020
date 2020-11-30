<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<%@ page language="java" import="java.sql.SQLException" %>
<%@ page language="java" import="java.sql.PreparedStatement" %>
<%@ page language="java" import="java.sql.ResultSet" %>
<%@ page language="java" import="java.sql.Connection" %>
<%@ page language="java" import="kr.ac.sungshin.w13.DBConnection" %>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>List of employees</title>
</head>
<body>
	<ul>
		<li><a href="../index.html">index</a>
	</ul>

	<h3>직원 목록</h3>
	<table border="1">
	<tr>
		<td>employee_id</td>
		<td>first_name</td>
		<td>last_name</td>
		<td>salary</td>
		<td>department_name</td>
		<td>job_title</td>
		<td>delete</td>
	</tr>
	<%
	Connection conn = null;	
	PreparedStatement pstmt = null;
	ResultSet rs = null;
	
	try {
		conn = DBConnection.getConnection();
		String sql = "select emp.employee_id, emp.first_name, emp.last_name, emp.salary, dep.department_name, job.job_title from employees emp, departments dep, jobs job where emp.department_id = dep.department_id and emp.job_id = job.job_id";
		pstmt = conn.prepareStatement(sql);
		rs = pstmt.executeQuery();
		while(rs.next()){
			out.println("<tr>");
			out.println("<td>" + rs.getString("employee_id") + "</td>");
			out.println("<td>" + rs.getString("first_name") + "</td>");
			out.println("<td>" + rs.getString("last_name") + "</td>");
			out.println("<td>" + rs.getString("salary") + "</td>");
			out.println("<td>" + rs.getString("department_name") + "</td>");
			out.println("<td>" + rs.getString("job_title") + "</td>");
			out.println("<td><a href=\"Delete.jsp?send_id=" + rs.getString("employee_id") + "\">delete</a></td>"); 
			out.println("</tr>");
		

			}
	} catch (SQLException e){
		System.out.println(e.getMessage());		
	} finally {
		if(rs != null) rs.close();
		if(pstmt != null) pstmt.close();
		if(conn != null) conn.close();
	}	
%>
	
	</table>

</body>
</html>
