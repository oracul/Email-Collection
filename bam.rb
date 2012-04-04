require 'sinatra'

get '/' do
  erb "Yo <form method=POST><input name=email></form>"
end

post '/' do
 erb "Hot <%= escape_html(params[:email]) %>"
end
