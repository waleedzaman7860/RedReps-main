@component('mail::message')
# Career Form Submission
<style>
table {
width: 100%;
border-collapse: collapse;
}

th,
td {
padding: 8px;
text-align: left;
}
</style>
<table style="width: 100%;">
<tr>
<th style="text-align: left;">Field</th>
<th style="text-align: left;">Value</th>
</tr>
<tr>
<td style="border: 1px solid black;">Name</td>
<td style="border: 1px solid black;">{{ $data['firstname'] }} {{ $data['lastname'] }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Phone Number</td>
<td style="border: 1px solid black;">{{ $data['phone_number'] }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Email</td>
<td style="border: 1px solid black;">{{ $data['email'] }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">LinkedIn</td>
<td style="border: 1px solid black;">{{ $data['linkedin'] ?? 'N/A' }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Current Job Title</td>
<td style="border: 1px solid black;">{{ $data['jobtitle'] }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Current Employer</td>
<td style="border: 1px solid black;">{{ $data['employer'] }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Years of Experience in Relevant Field</td>
<td style="border: 1px solid black;">{{ $data['experience_year'] }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Highest Education Level</td>
<td style="border: 1px solid black;">{{ $data['education_level'] }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Resume</td>
<td style="border: 1px solid black;"><a href="{{ asset('storage/' . $data['resume_path']) }}" download>Download
Resume</a></td>
</tr>
<tr>
<td style="border: 1px solid black;">Cover Letter</td>
<td style="border: 1px solid black;">
@if (isset($data['cover_letter']))
<a href="{{ asset('storage/' . $data['cover_letter_path']) }}" download>Download Cover Letter</a>
@else
N/A
@endif
</td>
</tr>
<tr>
<td style="border: 1px solid black;">How did you hear about this job opening?</td>
<td style="border: 1px solid black;">{{ $data['job_opening'] }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Availability to Start</td>
<td style="border: 1px solid black;">{{ $data['availability'] }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Salary Expectations</td>
<td style="border: 1px solid black;">{{ $data['salary'] ?? 'N/A' }}</td>
</tr>
<tr>
<td style="border: 1px solid black;">Additional Comments or Information</td>
<td style="border: 1px solid black;">{{ $data['comment'] ?? 'N/A' }}</td>
</tr>
</table>
@endcomponent
